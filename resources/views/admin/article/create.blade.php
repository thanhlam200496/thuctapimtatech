@extends('admin.master')

@section('title', 'Thêm Mới')

@section('title-page', 'Thêm Mới Bài Viết')

@section('main-content')
    <!-- Main content -->
    <section class="container mt-4">

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Thêm mới Bài Viết</h3>
            </div>
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="articleName" class="form-label">Tên Bài viết</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="articleName" name="name" onkeyup="ChangeToSlug()">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="news_summary" class="form-label">Tóm Tắt</label>
                                <input type="text" class="form-control @error('news_summary') is-invalid @enderror" id="news_summary" name="news_summary">
                                @error('news_summary')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Chọn Loại Tin</label>
                                <select name="category_id" class="form-select">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editor" class="form-label">Nội Dung</label>
                                <textarea name="description" id="editor" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>

    </section>
    <!-- /.content -->

@endsection

@section('custom-js')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

    <script language="javascript">
        function ChangeToSlug() {
            var productName, slug;

            // Lấy text từ thẻ input title
            productName = document.getElementById("productName").value;

            // Đổi chữ hoa thành chữ thường
            slug = productName.toLowerCase();

            // Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            // Xóa các ký tự đặc biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            // Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            // Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            // Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            // Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            // In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
