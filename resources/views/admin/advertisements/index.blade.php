@extends('admin.master')

@section('title', 'Danh Sách')

@section('title-page', 'Danh Sách Loại Tin')

@section('main-content')
    <section class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
              
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ $message }}
            </div>
        @endif

        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('advertisement.create') }}" class="btn btn-success">+ Thêm mới Quảng cáo</a>
                        <a href="
                        {{-- {{ route('advertisement.trash') }} --}}
                         "
                            class="btn btn-secondary"><i class="fa fa-trash"></i> Thùng Rác</a>
                    </div>
                    <div class="box-tools">
                        <form action="{{ route('advertisement.index') }}" method="GET">
                            <div class="search-container">
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="search" placeholder="Tìm quảng cáo"  value="{{ request()->search }}">
                                    <button class="btn" type="submit"><i class="bi bi-search"></i></button>
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
                        style="padding: 12px 20px 12px 20px; border-radius: 7px 7px 0 0">
                        <p class="card-title text-white" style="font-weight: 600; font-size: 1.2rem">Danh sách quảng cáo</p>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 430px;">
                        <table class="table table-hover table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Hình ảnh</th>
                                    {{-- <th>LT-Cha</th> --}}
                                    <th>Đường dẫn</th>
                                    <th>Vị trí</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($advertisements as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage/images') }}/{{ $item->image_url }}" width="150px">
                                        </td>
                                        {{-- <td>{{ $item->parent_id }}</td> --}}
                                        <td>@if (strlen($item->link) > 70)
                                            {{ substr($item->link, 0, 70) }}...
                                        @else
                                            {{ $item->link }}
                                        @endif</td>
                                        <td>{{ $item->position }}</td>
                                        <td>
                                            <a href="{{ route('advertisement.edit', $item->id) }}"
                                                class="btn btn-success"><i class="fa fa-pencil"></i> Chỉnh Sửa</a>
                                            <form action="{{ route('advertisement.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn Chắc Muốn Xóa?')"><i
                                                        class="fa fa-trash"></i> Xóa</button>
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
                        {{ $advertisements->links() }}
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.box -->
    </section>
@endsection
