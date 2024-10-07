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
                    <a href="" class="btn btn-secondary"><i class="fa fa-trash"></i> Thùng
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
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                            <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Danh sách faq's</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            <table class="table table-hover table-head-fixed text-nowrap">
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
                                        <td>{{ strlen($category->name) > 50 ? substr($category->name, 0, 50) . '...' : $category->name }}</td> <!-- Tên loại tin -->
                                        <td>{{ strlen($faq->question) > 50 ? substr($faq->question, 0, 50) . '...' : $faq->question }}</td> <!-- Câu hỏi -->
                                        <td>{{ strlen($faq->answer) > 50 ? substr($faq->answer, 0, 50) . '...' : $faq->answer }}</td> <!-- Trả lời -->
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
                        <!-- /.card-body -->
                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.box -->
</section>
@endsection