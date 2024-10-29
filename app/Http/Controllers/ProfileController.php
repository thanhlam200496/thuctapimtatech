<?php

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{

    public function edit()
{
    return view('clients.profile');
}
public function update(Request $request)
{
    $user = auth()->user();

    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
       'password' => ['nullable', 'min:8', 'confirmed'],
    ]);

    
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    
    if ($request->filled('password')) {
        $user->password = Hash::make($request->input('password'));
    }

   
    $user->save();
   
    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
}
}
