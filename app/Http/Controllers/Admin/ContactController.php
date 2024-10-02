<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

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
            $email->subject('Xác nhận đăng ký tài khoản!');
        });
        // dd($request->all('mess_return'));
        $contact=Contact::find($id);
        $contact->update($data);
        return redirect()->route('contact.index');
    }
}
