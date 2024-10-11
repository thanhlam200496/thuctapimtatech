@extends('admin.master')

@section('title', 'Danh Sách Người Dùng')

@section('title-page', 'Danh Sách Người Dùng')

@section('main-content')
    <section class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ $message }}
            </div>
        @endif

        <!-- Default box -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('user.create') }}" class="btn btn-success">+ Thêm Mới Người Dùng</a>
                        <a href="" class="btn btn-secondary"><i class="fa fa-trash"></i> Thùng Rác</a>
                    </div>
                    <div class="box-tools">
                        <form action="{{ route('user.index') }}" method="GET">
                            <div class="search-container">
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="search" placeholder="Tìm người dùng"  value="{{ request()->search }}">
                                    <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                        <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Danh sách người dùng</p>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Vai Trò</th>
                                <th>Trạng Thái</th>
                                <th>Ngày Tạo</th>
                                <th>Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Str::limit($user->name, 20) }}</td> 
                                    <td>{{ Str::limit($user->email, 30) }}</td>
                                    <td>{{ $user->role == 'client' ? 'Client' : 'Admin' }}</td>
                                    <td>{!! $user->status == 1 ? '<span class="label label-success">Hoạt động</span>' : '<span class="label label-danger">Ngừng hoạt động</span>' !!}</td>
                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $user) }}" class="btn btn-warning me-2"><i class="fa fa-eye"></i> Show</a>
                                        <a href="{{ route('user.edit', $user) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Update</a>
                                        <form action="{{ route('user.destroy', $user) }}" method="POST" style="display:inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Chưa Có Dữ Liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->
    </section>
@endsection
