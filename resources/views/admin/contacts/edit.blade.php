@extends('admin.master')

@section('title', 'Chi tiết liên hệ')

{{-- @section('title-page', 'Thêm Mới quảng cáo') --}}

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        <!-- Default box -->

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header bg-primary text-white" style="padding-bottom: 16px">
                <h3 class="card-title text-white">Thêm mới quảng cáo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('contact.update', $contacts->id) }}" >
                @method('PUT')
                @csrf
                <div class="card-body">

                    {{-- <div class="form-group mb-3 ">
                            <label for="name" class="form-label">Image </label>
                            <input type="file" class="form-control " id="image_url" name="image_url" value="{{ old('image_url') }}" style="background-color: white; color: black;">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Tên </label>
                            <input type="text" class="form-control " id="link" name="name" disabled
                                value="{{ $contacts->name }}" style="background-color: white; color: black;">
                            <p style="color: red">{{ $errors->first('link') }}</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Email </label>
                            <input type="text" class="form-control " id="link" name="email" disabled
                                value="{{ $contacts->email }}" style="background-color: white; color: black;">
                            <p style="color: red">{{ $errors->first('link') }}</p>
                        </div>
                    </div>
                        </div>
                    


                    <div class="form-group mb-3 ">
                        <label for="name" class="form-label">Message </label>
                        <textarea name="message" class="form-control " id="" cols="10" disabled rows="5">{{ $contacts->message }}</textarea>
                        <p style="color: red">{{ $errors->first('link') }}</p>
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="name" class="form-label">Phản hồi </label>
                        <textarea name="mess_return" class="form-control " id="" cols="10" rows="5">{{ old('mess_return') }}</textarea>
                        <p style="color: red">{{ $errors->first('mess_return') }}</p>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


        <!-- /.col -->

    </section>
    <!-- /.content -->

@endsection
