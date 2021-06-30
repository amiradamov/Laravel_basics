@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Hinkal List
        </div>
        @foreach($hinkals as $hinkal)
            <div>
                {{ $loop->index }} - {{ $hinkal['type']}} - {{ $hinkal['base']}}

                @if($loop->first)
                <span>- first in the loop</span>
                @endif
                @if($loop->last)
                <span>- last in the loop</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection 