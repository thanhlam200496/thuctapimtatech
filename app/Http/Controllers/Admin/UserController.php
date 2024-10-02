<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Lấy tất cả người dùng
        return view('admin.user.index', compact('users')); // Trả về view hiển thị danh sách
    }

    // Hiển thị form thêm mới người dùng
    public function create()
    {
        return view('admin.user.create'); // Trả về view thêm người dùng
    }

    // Lưu thông tin người dùng mới
    public function store(CreateUserRequest $request)
    {
        // Tạo mới người dùng
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
            'role' => $request->role,  
            'status' => $request->status,
        ]);
        return redirect()->route('user.index')->with('success', 'Người dùng đã được tạo thành công!');
    }

     // Hiển thị thông tin chi tiết người dùng
     public function show($id)
     {
         $user = User::findOrFail($id); // Lấy thông tin người dùng theo id
         return view('admin.user.show', compact('user')); // Trả về view chi tiết người dùng
     }
 
     // Hiển thị form chỉnh sửa thông tin người dùng
     public function edit($id)
     {
         $user = User::findOrFail($id); // Lấy thông tin người dùng
         return view('admin.user.edit', compact('user')); // Trả về view chỉnh sửa
     }
 
     // Cập nhật thông tin người dùng
     public function update(UpdateUserRequest $request, $id)
     {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role; 
        $user->status = $request->status;
 
         // Nếu có mật khẩu mới, mã hóa và cập nhật
         if ($request->password) {
             $user->password = bcrypt($request->password);
         }
 
         $user->save(); // Lưu thông tin người dùng
 
         return redirect()->route('user.index')->with('success', 'Thông tin người dùng đã được cập nhật thành công!');
     }
 
     // Xóa người dùng
     public function destroy($id)
     {
         $user = User::findOrFail($id); // Tìm người dùng theo id
         $user->delete(); // Xóa người dùng
 
         return redirect()->route('user.index')->with('success', 'Người dùng đã được xóa thành công!');
     }
}
