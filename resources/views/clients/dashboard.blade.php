@extends('clients.partials.default')

@section('title')
    Dashboard
@endsection

@section('content')
    <h2>Hello {{Auth::user()->name}}</h2>
    <form action="{{ route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection
