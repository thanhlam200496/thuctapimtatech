<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenController extends Controller
{
    public function showLoginForm()
    {
        return view(view: 'auth.login');
    }

    public function login()
    {
        // dd(request()->all());
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
       
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             *  @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('clients.dashboard');
        }
        return back()
            ->withErrors(['email' => 'Email hoặc mật khẩu không đúng.'])
            ->onlyInput('email');
        
        }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register()
    {
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        Mail::send('clients/email/checkEmail', compact('data'), function ($email) use ($data) {
            $email->to($data['email']);
            $email->subject('Xác nhận đăng ký tài khoản!');
        });
        $message = "Vui lòng kiểm tra email để kích hoạt tài khoản";
        return redirect()->back()->with(['message' => $message]);

       
    }

    public function checkEmail(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'email_verified_at' => Carbon::now(),
        ];
        User::insert($data);
        $message = "Đăng ký thành công, vui lòng đăng nhập!";
        return view('auth.login')->with(['message' => $message]);
        
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
