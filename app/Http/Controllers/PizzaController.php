<?php

namespace App\Http\Controllers;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBY('name','desc')->get();
        // $pizzas = Pizza::where('base','hawaiian')->get();
        $pizzas = Pizza::latest()->get();

          return view('pizzas.index', [
              'pizzas' => $pizzas,
          ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show',['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        $pizza->base = request('base');
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->toppings =  request('toppings');
        
        $pizza->save();

        return redirect('/')->with('mssg','Thanks for your order');
    }
    public function destroy($id){
        $pizza = Pizza::findORFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
