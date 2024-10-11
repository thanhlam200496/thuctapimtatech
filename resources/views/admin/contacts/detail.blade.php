@extends('admin.master')

@section('title', 'Chi tiết liên hệ')



@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        
        <div class="card card-primary">
            <div class="card-header bg-primary text-white" style="padding-bottom: 16px">
                <h3 class="card-title text-white">Chi tiết liên hệ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{-- <form method="POST" action="{{ route('contact.update', $contact->id) }}" >
                @method('PUT')
                @csrf --}}
                <div class="card-body">

                    
                        <div class="row">
                            <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Tên </label>
                            <input type="text" class="form-control " id="link" name="name" disabled
                                value="{{ $contact->name }}" style="background-color: white; color: black;">
                            <p style="color: red">{{ $errors->first('link') }}</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Email </label>
                            <input type="text" class="form-control " id="link" name="email" disabled
                                value="{{ $contact->email }}" style="background-color: white; color: black;">
                            <p style="color: red">{{ $errors->first('link') }}</p>
                        </div>
                    </div>
                        </div>
                    


                    <div class="form-group mb-3 ">
                        <label for="name" class="form-label">Message </label>
                        <textarea name="message" class="form-control " id="" cols="10" disabled rows="5">{{ $contact->message }}</textarea>
                        <p style="color: red">{{ $errors->first('link') }}</p>
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="name" class="form-label">Phản hồi </label>
                        <textarea name="mess_return" disabled class="form-control " id="" cols="10" rows="5">{{ $contact->mess_return }}</textarea>
                        <p style="color: red">{{ $errors->first('mess_return') }}</p>
                    </div>
                </div>
                <!-- /.card-body -->

                {{-- <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </form> --}}
        </div>
        <!-- /.card -->


        <!-- /.col -->

    </section>
    <!-- /.content -->

@endsection
