@extends('admin.master')

@section('title', 'Thêm Mới')

@section('title-page', 'Thêm Mới FAQ')

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

        <!-- /.box-header -->
        <div class="card-header bg-primary text-white" style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
            <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem"> Thêm Mới FAQ's</p>
        </div>
        <div class="box-body table-responsive no-padding">
            <form role="form" method="POST" action="{{ route('faqs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <!-- Danh mục -->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Chọn Loại Tin</label>
                        <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                            <option value="">Chọn danh mục</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Câu hỏi -->
                    <div class="form-question mb-3">
                        <label for="question" class="form-label">Câu hỏi thường gặp</label>
                        <input type="text" name="question" id="question" class="form-control @error('question') is-invalid @enderror"
                            value="{{ old('question') }}">
                        @error('question')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Câu trả lời -->
                    <div class="form-answer mb-3">
                        <label for="answer" class="form-label">Câu trả lời</label>
                        <input type="text" name="answer" id="answer" class="form-control @error('answer') is-invalid @enderror"
                            value="{{ old('answer') }}">
                        @error('answer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                </div>


                <!-- /.card-body -->

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>

</section>
@endsection