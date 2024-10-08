@extends('admin.master')

@section('title', 'Cập nhật')

@section('title-page', 'Cập nhật FAQ')

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
                            <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Chỉnh Sửa FAQ's</p>
                        </div>
        <div class="box-body table-responsive no-padding">
            <form role="form" method="POST" action="{{ route('faqs.update',$faq->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Chọn Loại Tin</label>
                        <select name="category_id" class="form-select">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $faq->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-question mb-3">
                        <label class="form-label">Câu hỏi thường gặp</label>
                        <input type="text" name="question" id="" class="form-control" value="{{ $faq->question }}">
                        @error('question')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-question mb-3">
                        <label class="form-label">Câu trả lời</label>
                        <input type="text" name="answer" id="" class="form-control" value="{{ $faq->answer }}">
                        @error('answer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </form>
        </div>
    </div>

</section>
@endsection