@extends('admin.master')

@section('title', 'Danh Sách')

@section('title-page', 'Danh Sách Loại Tin')

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
            <div class="box">
                <div class="box-header d-flex justify-content-between align-items-center">
                    <div>
                        {{-- <a href="{{ route('advertisement.create') }}" class="btn btn-success">+ Thêm mới Quảng cáo</a> --}}
                        <a href="
                        {{-- {{ route('advertisement.trash') }} --}}
                         "
                            class="btn btn-submit"><i class="fa fa-trash"></i> Lịch sử</a>
                    </div>
                    <div class="box-tools">
                        <form action="{{ route('contact.index') }}" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control pull-right" placeholder="Search"
                                    value="{{ request()->search }}">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="card-header bg-primary text-white"
                        style=" border-radius: 7px 7px 0 0">
                        <p class="card-title text-white" style="padding: 12px 20px 12px 20px;font-weight: 600; font-size: 1.2rem">Danh sách người liên hệ</p>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 430px;">
                        <table class="table table-hover table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                <th>Tên</th>
                                {{-- <th>LT-Cha</th> --}}
                                <th>Email</th>
                                <th>Message</th>
                                <th>Trạng thái</th>
                                <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if (strlen($item->message) > 35)
                                            {{ substr($item->message, 0, 35) }}...
                                        @else
                                            {{ $item->message }}
                                        @endif
                                        
                                    </td>

                                    <td>

                                        @if ($item->status == 0)
                                            <input type="button" class="btn btn-primary btn-xs comment_status_btn"
                                                name="status" id="" value="Đang chờ">
                                        @elseif($item->status == 1)
                                            <input type="button" class="btn btn-success btn-xs comment_status_btn"
                                                name="status" id="" value="Đã duyệt">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('contact.edit', $item->id) }}" class="btn btn-success"><i
                                                class="fa fa-pencil"></i> Chỉnh Sửa</a>
                                        <form action="{{ route('advertisement.destroy', $item->id) }}" method="POST"
                                            style="display:inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i class="fa fa-trash"></i>
                                                Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Chưa Có Dữ Liệu</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="pagination-container">
                        {{ $contacts->links() }}
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.box -->
    </section>
@endsection
