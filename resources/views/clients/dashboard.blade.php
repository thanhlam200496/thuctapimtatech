@extends('clients.partials.default')

@section('title')
    Dashboard
@endsection

@section('content')
    <h2>Hello {{Auth::user()->name}}</h2>
    <h3>Chào mừng bạn đến với ZORIK</h3>
@endsection
