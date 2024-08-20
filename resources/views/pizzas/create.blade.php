@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <H1>Create a New pizza</H1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="naem">Your Name: </label>
        <input type="text" name="name" id="name" required><br>
        <label for="type">Choose pizza types:</label>
        <select name="type" id="type">
            <option value="margarita">Magarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg superme">Veg Supreme</option>
            <option value="valcano">Vocalno</option>
        </select>
        <label for="type">Choose base types:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select><br>
        <fieldset>
            <label for="">Extra toppings: </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
        </fieldset>
        
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection