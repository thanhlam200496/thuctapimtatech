@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                    <h2>Hello {{ Auth::user()->name }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
