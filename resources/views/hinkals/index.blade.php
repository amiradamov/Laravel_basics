@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Hinkal List
        </div>
        @foreach($hinkals as $hinkal)
            <div>
                {{ $hinkal->name }} - {{ $hinkal->base }} - {{ $hinkal->type }};
            </div>
        @endforeach
    </div>
</div>
@endsection 