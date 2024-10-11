<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();
        $query->where('status',0);
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')->orwhere('email', 'like', '%' . $request->search . '%');
        }

        // Thay thế get() bằng paginate(10) để phân trang 10 sản phẩm mỗi trang
        $contacts = $query->paginate(10);

        return view('admin.contacts.index', compact('contacts'));
    }
    public function edit(string $id)
    {
        $contacts = Contact::find($id);
        return view("admin.contacts.edit", compact('contacts'));
    }
    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $request->validate(
            [
                'mess_return' => 'required',
            ],
            [
                'mess_return.required' => 'Vui lòng nhập tin nhắn phản hồi'
            ]
        );
        // dd($request->all());
        $data=[
            'status'=>1,
            'mess_return'=>$request->mess_return
        ];
        $data_return_email=[
            'name'=>$contact->name,
            'email'=>$contact->email,
            'message'=>$contact->message,
            'mess_return'=>$request->mess_return
        ];
        Mail::send('clients/email/return_contact', compact('data_return_email'), function ($email) use ($data_return_email) {
            $email->to($data_return_email['email']);
            $email->subject('Bạn có một Email từ Web giáo dục!');
        });
        // dd($request->all('mess_return'));
        $contact=Contact::find($id);
        $contact->update($data);
        return redirect()->route('contact.index');
    }
    public function history(Request $request) {
        $query = Contact::query();
        $query->where('status',1);
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')->orwhere('email', 'like', '%' . $request->search . '%');
        }

        
        $contacts = $query->paginate(10);

        return view('admin.contacts.history', compact('contacts'));
    }
    public function detail($id)  {
        $contact=Contact::find($id);
        return view('admin.contacts.detail', compact('contact'));
    }
}
