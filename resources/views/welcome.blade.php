@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
    <!-- <img src="/img/logo_hinkal.png" alt="hinkal house logo" width="250px" height="250px"> -->
        <div class="title m-b-md">
            Caucasian best hinkal
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('hinkals.create') }}">Order Hinkal</a><br/>
    </div>
</div>
@endsection