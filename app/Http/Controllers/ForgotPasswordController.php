<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    // Hiển thị form yêu cầu quên mật khẩu
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Gửi link đặt lại mật khẩu
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.exists' => 'Email không tồn tại trong hệ thống.'
        ]);

        $token = Str::random(60);

        // Lưu token vào bảng 'password_resets'
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        // Gửi email
        Mail::send('auth.emails.password-reset', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Đặt lại mật khẩu');
        });

        return back()->with('message', 'Đã gửi link đặt lại mật khẩu tới email của bạn!');
    }

    // Hiển thị form đặt lại mật khẩu
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Đặt lại mật khẩu mới
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required'
        ], [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.exists' => 'Email không tồn tại trong hệ thống.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.string' => 'Mật khẩu phải là chuỗi.',
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'password.confirmed' => 'Mật khẩu không khớp.',
            'token.required' => 'Token là bắt buộc.',
        ]);

        // Kiểm tra token
        $record = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$record) {
            return back()->withErrors(['token' => 'Email không hợp lệ!']);
        }

        // Cập nhật mật khẩu mới
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Xóa token sau khi đặt lại mật khẩu
        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect()->route('login')->with('message', 'Đặt lại mật khẩu thành công!');
    }
}
