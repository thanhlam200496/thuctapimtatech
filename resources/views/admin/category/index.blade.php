@extends('admin.master')

@section('title', 'Danh Sách Loại Tin')

@section('title-page', 'Danh Sách Loại Tin')

@section('main-content')
    <section class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ $message }}
            </div>
        @endif

        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('category.create') }}" class="btn btn-success">+ Thêm mới Loại Tin</a>
                        {{-- <a href="{{ route('category.trash') }}" class="btn btn-secondary"><i class="fa fa-trash"></i> Thùng Rác</a> --}}
                    </div>
                    <div class="box-tools">
                        <form action="{{ route('category.index') }}" method="GET">
                            <div class="search-container">
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="search" placeholder="Tìm danh mục"  value="{{ request()->search }}">
                                    <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
            </div>
            <!-- /.box -->
        </div>

        <div class="row">
            <div class="col-12">
              <div class="">
                <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                    <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Danh sách loại tin</p>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 430px;">
                  <table class="table table-hover table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên Loại Tin</th>
                            <th>LT-Cha</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $item)
                            @if ($item->parent_id == null)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->parent_id }}</td>
                                    <td>{!! $item->status
                                        ? '<span class="label label-success">Hiển Thị</span>'
                                        : '<span class="label label-danger">Ẩn</span>' !!}</td>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $item) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Chỉnh Sửa</a>
                                        <form action="{{ route('category.destroy', $item) }}" method="POST" style="display:inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i class="fa fa-trash"></i> Xóa</button>
                                        </form>
                                    </td>
                                </tr>

                                @foreach ($categories as $item2)
                                    @if ($item->id == $item2->parent_id)
                                        <tr>
                                            <td>+</td>
                                            <td>{{ $item2->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{!! $item2->status
                                                ? '<span class="label label-success">Hiển Thị</span>'
                                                : '<span class="label label-danger">Ẩn</span>' !!}</td>
                                            <td>{{ $item2->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', $item2) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Chỉnh Sửa</a>
                                                <form action="{{ route('category.destroy', $item2) }}" method="POST" style="display:inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i class="fa fa-trash"></i> Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Chưa Có Dữ Liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </section>
@endsection
