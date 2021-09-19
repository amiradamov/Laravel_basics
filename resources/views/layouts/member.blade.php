@extends('layouts.app')

@section('content')
<div class="wrapper hinkal-index">
    <h1>Members</h1>
    @foreach($members as $member)
    <h4>{{$member->email}}</h4>
    @endforeach
    
</div>
@endsection