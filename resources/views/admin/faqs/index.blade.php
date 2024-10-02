@extends('admin.master')

@section('title', 'Danh Sách')

@section('title-page', 'Danh Sách FAQ')

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
                    <a href="{{ route('faqs.create') }}" class="btn btn-success">+ Thêm mới Faq's</a>
                    <a href="" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng
                        Rác</a>
                </div>
                <div class="box-tools">
                    <form action="{{ route('faqs.index') }}" method="GET">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control pull-right" placeholder="Search"
                                value="{{ request()->search }}">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên Loại Tin</th>
                            <th>Câu Hỏi</th>
                            <th>Trả Lời</th>
                            <th>Ngày Tạo</th>
                            <th>Tùy Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        @forelse ($category->faqs as $faq)
                        <tr>
                            <td>{{ $loop->parent->iteration }}.{{ $loop->iteration }}</td> <!-- Số thứ tự -->
                            <td>{{ $category->name }}</td> <!-- Tên loại tin -->
                            <td>{{ $faq->question }}</td> <!-- Câu hỏi -->
                            <td>{{ $faq->answer }}</td> <!-- Trả lời -->
                            <td>{{ $faq->created_at->format('d/m/Y') }}</td> <!-- Ngày tạo -->
                            <td>
                                <!-- Nút chỉnh sửa -->
                                <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-success">
                                    <i class="fa fa-pencil"></i> Chỉnh Sửa
                                </a>
                                <!-- Form xóa -->
                                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn Chắc Muốn Xóa?')">
                                        <i class="fa fa-trash"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Không có câu hỏi nào trong danh mục {{$category->name}}</td>
                        </tr>
                        @endforelse
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Chưa có danh mục nào.</td>
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