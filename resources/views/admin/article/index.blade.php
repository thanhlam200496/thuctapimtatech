@extends('admin.master')

@section('title', 'Danh Sách Tin')

@section('title-page', 'Danh Sách Tin')

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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('article.create') }}" class="btn btn-success">+ Thêm mới Tin</a>
                        {{-- <a href="{{ route('article.trash') }}" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng Rác</a> --}}
                    </div>

                    <div class="box-tools">
                        <form action="{{ route('article.index') }}" method="GET">
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
            </div>
            <!-- /.box -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header bg-primary text-white" style="padding: 12px 20px; border-radius: 7px 7px 0 0;">
                        <p class="box-title" style="font-weight: 600; font-size: 1.2rem">Danh sách tin tức</p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive" style="height: 430px;">
                        <table class="table table-hover table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Tiêu Đề</th>
                                    <th>Tóm Tắt</th>
                                    <th>Hình ảnh</th>
                                    <th>Danh Mục</th>
                                    <th>Ngày Tạo</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ strlen($item->name) > 45 ? substr($item->name, 0, 45) . '...' : $item->name }}
                                        </td>
                                        <td>{{ strlen($item->news_summary) > 45 ? substr($item->news_summary, 0, 45) . '...' : $item->news_summary }}
                                        </td>
                                        <td><img src="{{ asset('storage/images') }}/{{ $item->image }}" width="100px">
                                        </td>
                                        <td>{{ optional($item->category)->name }}</td>
                                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('article.edit', $item) }}" class="btn btn-success"><i
                                                    class="fa fa-pencil"></i> Update</a>
                                            <form action="{{ route('article.destroy', $item) }}" method="POST"
                                                style="display:inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i
                                                        class="fa fa-trash"></i> Delete</button>
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
                    <div class="pagination-container">
                        {{ $articles->links() }}
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
