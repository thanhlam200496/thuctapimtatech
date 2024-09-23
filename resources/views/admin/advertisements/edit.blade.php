@extends('admin.master')

@section('title', 'Thêm Mới')

@section('title-page', 'Thêm Mới Loại Tin')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        <!-- Default box -->
        <div class="col-md-5 mx-auto">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title text-white">Chỉnh sửa quảng cáo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('advertisement.update',$advertisements->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        
                        <div class="form-group mb-3 ">
                            <label for="name" class="form-label">Image </label>
                            <input type="file" class="form-control " id="image_url" name="image_url_new" value="" style="background-color: white; color: black;">
                            <img src="{{asset('storage/images/'.$advertisements->image_url) }}" alt="" height="80px">
                            
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="name" class="form-label">Link </label>
                            <input type="text" class="form-control " id="link" name="link" value="{{$advertisements->link }}" style="background-color: white; color: black;">
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Chọn vị trí hiển thị</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="position" id="status1" value="banner"  {{$advertisements->position=='banner'?'checked':''}}>
                                <label class="form-check-label" for="status1">Banner</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="position" id="status0" value="sidebar" {{$advertisements->position=='sidebar'?'checked':''}}>
                                <label class="form-check-label" for="status0">Sidebar</label>
                            </div>
                        </div>
                       
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->

@endsection
