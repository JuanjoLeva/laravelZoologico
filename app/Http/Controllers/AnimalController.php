<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class AnimalController extends Controller
{

    public function index()
    {
        $animales=Animal::all();
        //return view("animales.index",["animales"=>$animales]);
        return view("animales.index",compact("animales"));
    }

    public function create()
    {
        return view("animales.create");
    }

    public function show($animal)
    {
        $animales=Animal::findOrFail($animal);
        return view("animales.show",['animal'=>$animales]);
    }

    public function edit($animal)
    {
        $animales=Animal::findOrFail($animal);
        return view("animales.edit",['animal'=>$animales]);
    }

    public function store(Request $request){

        $nuevoAnimal=new Animal();
        $nuevoAnimal->especie=$request->especie;
        $nuevoAnimal->peso=$request->peso;
        $nuevoAnimal->altura=$request->altura;
        $nuevoAnimal->fechaNac=$request->fechaNac;
        $nuevoAnimal->alimentacion=$request->alimentacion;
        $nuevoAnimal->descripcion=$request->descripcion;
        $nuevoAnimal->imagen= $request->imagen->store('','animales');

        $nuevoAnimal->save();
        return view("animales.show",['animal'=>$nuevoAnimal]);
    }

    public function update(Request $request, $animal){
        $animales=Animal::findOrFail($animal);

        $animales->especie=$request->especie;
        $animales->peso=$request->peso;
        $animales->altura=$request->altura;
        $animales->fechaNac=$request->fechaNac;
        $animales->alimentacion=$request->alimentacion;
        $animales->descripcion=$request->descripcion;
        $animales->imagen= $request->imagen->store('','animales');
        $animales->save();
        return view("animales.show",['animal'=>$animales]);
    }


}
