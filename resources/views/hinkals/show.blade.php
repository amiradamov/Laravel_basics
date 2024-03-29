@extends('layouts.app')

@section('content')
<div class="wrapper hinkal-details">
    <h1>Order for {{ $hinkal->name }}</h1>
    <p class="type">Type - {{ $hinkal->type }}</p>
    <p class="base">base - {{ $hinkal->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach($hinkal->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="{{ route('hinkals.destroy', $hinkal->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/hinkals" class="back">Back to menu</a>
@endsection 