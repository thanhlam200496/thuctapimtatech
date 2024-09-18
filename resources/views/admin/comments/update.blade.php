@extends('admin.master')

@section('title', 'Chỉnh Sửa')

@section('title-page', 'Chỉnh Sửa Bình Luận')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        <!-- Default box -->
        <div class="col-md-6 mx-auto">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Chỉnh Sửa Bình luận: {{ $comments->name }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('comments.update', $comments->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $comments->id }}">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="comments_content" class="form-label">nội dung bình luận</label>
                            <textarea rows="5" cols="10" type="text" class="form-control @error('comments_content') is-invalid @enderror" id="comments_content" name='comments_content'
                                value="{{ old('comments_content') ? old('comments_content') : $comments->comments_content }}">{{ $comments->comments_content}}</textarea>
                            @error('comments_content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="parent_id" class="form-label">Chọn LT-Cha</label>
                            <select name="parent_id" id="parent_id" class="form-select">
                                <option value="">Chọn LT-Cha</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $category->parent_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Chọn trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status1" value="1"
                                    {{ $comments->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status1">
                                    Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status0" value="0"
                                    {{ $comments->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status0">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
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
