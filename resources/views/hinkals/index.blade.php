@extends('layouts.layout')

@section('content')
<div class="wrapper hinkal-index">
    <h1>Hinkal Orders</h1>
@foreach($hinkals as $hinkal)
    <div class="hinkal-item ">
        <img src="/img/user_order.png" alt="user order">
        <h4><a href="/hinkals/{{$hinkal->id}}">{{ $hinkal->name }}</a></h4>
    </div>
@endforeach
    
</div>
@endsection 