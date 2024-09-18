@extends('admin.master')

@section('title', 'Danh Sách')

@section('title-page', 'Danh Sách Bình Luận')

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
                  
                    <a href="" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng Rác</a>
                </div>
                <div class="box-tools">
                    <form action="{{ route('comments.index') }}" method="GET">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control pull-right" placeholder="Search" value="{{ request()->search }}">
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
                            <th>tên người dùng</th>
                            <th>tên tin tức</th>
                            <th>Ngày tạo bình luận</th>
                            <th>Ngày cập nhật bình luận</th>
                            <th>trạng thái</th>

                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ ($item->user)->name }}</td>
                            <td>{{ ($item->article)->name }}</td>
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                            <td>
                                @if($item->status === 'pending')
                                <input type="button" class="btn btn-primary btn-xs comment_status_btn" name="status" id="" value="Đang chờ">
                                @elseif($item->status === 'approved')
                                <input type="button" class="btn btn-success btn-xs comment_status_btn" name="status" id="" value="Đã duyệt">
                                @elseif($item->status === 'rejected')
                                <input type="button" class="btn btn-danger btn-xs comment_status_btn" name="status" id="" value="Từ chối">
                                @else
                                Không xác định
                                @endif

                                
                            </td>



                            <td>
                                <a href="{{ route('comments.detail', $item) }}" class="btn btn-primary"><i class="fa fa-pencil"></i> xem chi tiết</a>
                                <a href="{{ route('comments.edit', $item) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Update</a>
                                <form action="{{ route('comments.destroy', $item) }}" method="POST" style="display:inline;">
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