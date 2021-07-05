@extends('layouts.layout')

@section('content')
<div class="wrapper create-hinkal">
    <h1>Create a New Hinkal</h1>
    <form action="/hinkals" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="avar">Avar</option>
            <option value="lezgi">Lezgi</option>
            <option value="choban">Choban</option>
        </select>

        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="spicy">spicy</option>
            <option value="not-spicy">not-spicy</option>
            <option value="extra-spicy">extra spicy</option>
        </select>
        <input type="submit" value="Order Hinkal">
    </form>
</div>
@endsection