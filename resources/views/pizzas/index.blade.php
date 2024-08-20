@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <img src="../img/pizza-house.png" alt="pizza house logo"><br>
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
          <div>
           {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
          </div>
        @endforeach

    </div>
</div>
@endsection