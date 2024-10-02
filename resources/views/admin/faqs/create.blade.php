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
        <div class="box-body table-responsive no-padding">
            <form role="form" method="POST" action="{{ route('faqs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Chọn Loại Tin</label>
                        <select name="category_id" class="form-select">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-question mb-3">
                        <label class="form-label">Câu hỏi thường gặp</label>
                        <input type="text" name="question" id="" class="form-control">
                        @error('question')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-question mb-3">
                        <label class="form-label">Câu trả lời</label>
                        <input type="text" name="answer" id="" class="form-control">
                        @error('answer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>

</section>
@endsection