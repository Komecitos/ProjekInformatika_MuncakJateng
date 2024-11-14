<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome Home, {{ Auth::user()->name }}!</h1>
    <p>You are successfully logged in.</p>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
</div>
@endsection