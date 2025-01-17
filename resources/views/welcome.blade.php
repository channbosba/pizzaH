@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <img src="../img/pizza-house.png" alt="pizza house logo"><br>
            Pizza House<br />
            The North's Best Pizzas
        </div>
        <p  class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>

    
@endsection
