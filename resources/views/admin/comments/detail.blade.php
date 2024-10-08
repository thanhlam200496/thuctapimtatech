@extends('admin.master')

@section('title', 'Chi tiết')

@section('title-page', 'Chi Tiết Bình Luận')

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


            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">

            <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                            <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Chi Tiết Bình Luận</p>
                        </div>
                <form class="ml-5" action="{{route('comments.updatestt',$comments->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $comments->id }}">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="user_name" class="form-label">tên người dùng</label>
                            <input class="form-control" type="text" name="user_name" id="user_name" value="{{ old('user_name') ? old('user_name') : $comments->user_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="article_name" class="form-label">tên bài viết</label>
                            <input class="form-control" type="text" name="article_name" id="article_name" value="{{ old('article_name') ? old('article_name') : $comments->article_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="comments_content" class="form-label">nội dung bình luận</label>
                            <textarea for="comments_content" class="form-control" id="comments_content" name="comments_content" readonly rows="5" cols="25" value="{{ old('comments_content') ? old('comments_content') : $comments->comments_content }}"> {{ $comments->comments_content }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="danhmuc">Status:</label>

                            @if ($comments->status == 'pending')
                            <select name="status" class="form-control" id="">
                                <option value="pending" selected>Pending</option>
                                <option value="approved">approved</option>
                                <option value="rejected">rejected</option>
                            </select>
                            @endif
                            @if ($comments->status == 'approved')
                            <select name="status" class="form-control" id="">
                                <option value="approved" selected>Processing</option>
                                <option value="rejected">rejected</option>
                            </select>
                            @endif
                            @if ($comments->status == 'rejected')
                            <select name="status" class="form-control" id="">
                                <option value="rejected" selected>rejected</option>
                                <option value="approved">approved</option>
                            </select>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer mt-4 text-end" >
                        <input type="submit" class="btn btn-success" name="themmoi" onclick="return confirm('Xác nhận cập nhật')" value="Submit">
                        <input class="btn btn-secondary" type="reset" value="Nhập lại">
                        <a href="{{route('comments.index')}}" class="btn btn-primary">Danh sách</a>
                    </div>
            </div>
            <!-- /.card-body -->
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.box -->
</section>
@endsection