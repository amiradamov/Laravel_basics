@extends('layouts.app')

@section('content')
<div class="wrapper create-hinkal">
    <h1>Order Hinkal</h1>
    <form action="/hinkals" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose hinkal type:</label>
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
        <fieldset>
            <label>Extra toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="potatos">Potatos<br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="Tomatos">Tomatos<br />
            <input type="checkbox" name="toppings[]" value="sirke">Sirke<br />
        </fieldset>
        <input type="submit" name="submit" value="Order Hinkal">
    </form>
</div>

@endsection