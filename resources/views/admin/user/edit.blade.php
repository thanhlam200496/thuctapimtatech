@extends('admin.master')

@section('title', 'Chỉnh Sửa Người Dùng')

@section('title-page', 'Chỉnh Sửa Người Dùng')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-3 text-white">Thông Tin Người Dùng: {{ $user->name }}</h3>
            </div>
            <!-- form start -->
            <form role="form" action="{{ route('user.update', $user) }}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên Người Dùng <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name='name' value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name='email' value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="password" class="form-label">Mật Khẩu <span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name='password'>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Xác Nhận Mật Khẩu <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" name='password_confirmation'>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <div class="mb-3">
                        <label for="role" class="form-label">Chọn Vai Trò <span class="text-danger">*</span></label>
                        <select name="role" id="role" class="form-select">
                            <option value="client" {{ old('role', $user->role ?? 'client') == 'client' ? 'selected' : '' }}>Client</option>
                            <option value="admin" {{ old('role', $user->role ?? 'client') == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Chọn Trạng Thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="1"
                                {{ old('status', $user->status) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status1">
                                Hoạt động
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status0" value="0"
                                {{ old('status', $user->status) == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status0">
                                Ngừng hoạt động
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Trở Lại</a>
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
