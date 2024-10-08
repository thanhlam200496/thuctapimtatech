@extends('admin.master')

@section('title', 'Thêm Mới')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                <h3 class="card-title text-white">Thêm mới Loại Tin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Tên Loại Tin</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" style="background-color: white; color: black;">
                        <p style="color: red">{{ $errors->first('name') }}</p>
                    </div>

                    <div class="form-group mb-3">
                        <label for="parent_id" class="form-label">Danh mục cha</label>
                        <select name="parent_id" class="form-select" style="background-color: white; color: black;">
                            <option value="">--Trống--</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Chọn trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                            <label class="form-check-label" for="status1">Hiện</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status0" value="0">
                            <label class="form-check-label" for="status0">Ẩn</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection
