@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $hinkal->name }}</h1>
    <p class="type">Type - {{ $hinkal->type }}</p>
    <p class="base">base - {{ $hinkal->base }}</p>
</div>
<a href="/hinkals" class="back">Back to menu</a>
@endsection 