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
                    <h3 class="card-title text-white">Thêm mới Loại Tin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{ route('advertisement.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                       
                        <div class="form-group mb-3 ">
                            <label for="name" class="form-label">Image </label>
                            <input type="file" class="form-control " id="image_url" name="image_url" value="{{ old('image_url') }}" style="background-color: white; color: black;">
                            {{-- @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="name" class="form-label">Link </label>
                            <input type="text" class="form-control " id="link" name="link" value="{{ old('link') }}" style="background-color: white; color: black;">
                            <p style="color: red">{{$errors->first('link')}}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Chọn vị trí hiển thị</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="position" id="status1" value="banner" checked>
                                <label class="form-check-label" for="status1">Banner</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="position" id="status0" value="sidebar">
                                <label class="form-check-label" for="status0">Sidebar</label>
                            </div>
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="parent_id" class="form-label">Chọn LT-Cha</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">Chọn LT-Cha</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        {{-- <div class="form-group mb-3">
                            <label for="status" class="form-label">Chọn trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                                <label class="form-check-label" for="status1">Hiện</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status0" value="0">
                                <label class="form-check-label" for="status0">Ẩn</label>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->

@endsection
