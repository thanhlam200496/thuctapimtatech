<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class AdminController extends Controller
{
  public function dashboard()
  {
    return view('admin.dashboard');
  }


  //     public function postlogon(Request $request){
//         if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>1])){
//             return redirect()->route('admin.index');
//         }else{
//             return redirect()->back()->with('error', 'Email hoặc mật khẩu không hợp lệ');
//         }
//     }

  //     public function signOut(){
//         Auth::logout();
//         return redirect()->route('admin.logon');
//     }
}
