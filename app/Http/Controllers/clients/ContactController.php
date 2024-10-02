<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()  {
        return view('clients.contact');
    }
    public function store(Request $request)  {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',
            ]
        );
        // dd($request->all('name','email','message'));
        try {
            Contact::create($request->all('name','email','message'));
            return redirect()->route('contact.index')->with('success', 'advertisements created successfully.');
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the articles.']);
        }
    }
}
