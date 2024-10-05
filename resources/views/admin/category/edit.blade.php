@extends('admin.master')

@section('title', 'Chỉnh Sửa')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        <!-- Default box -->
        
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                    <h3 class="card-title text-white">Chỉnh Sửa Loại Tin: {{ $category->name }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('category.update', $category->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Tên Loại Tin</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name='name'
                                value="{{ old('name') ? old('name') : $category->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="parent_id" class="form-label">Danh mục cha</label>
                            <select name="parent_id" class="form-control">
                                <option value="">--Trống--</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $category->parent_id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Chọn trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status1" value="1"
                                    {{ $category->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status1">
                                    Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status0" value="0"
                                    {{ $category->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status0">
                                    Ẩn
                                </label>
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

        
        <!-- /.col -->

    </section>
    <!-- /.content -->
@endsection
