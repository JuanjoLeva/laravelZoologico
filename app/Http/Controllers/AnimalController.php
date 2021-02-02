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

    public function show(Animal $animal)
    {
        return view("animales.show",compact("animal"));
    }

    public function edit(Animal $animal)
    {

        return view("animales.edit",compact("animal"));
    }

    public function store(Request $request){

        $datos=$request->all();
        $datos['imagen']=$request->imagen->store('','animales');

        $nuevoAnimal=Animal::create($datos);

        return view("animales.show",['animal'=>$nuevoAnimal]);
    }

    public function update(Request $request,Animal $animal){


        $animal->especie=$request->especie;
        $animal->peso=$request->peso;
        $animal->altura=$request->altura;
        $animal->fechaNac=$request->fechaNac;
        $animal->alimentacion=$request->alimentacion;
        $animal->descripcion=$request->descripcion;

        if(!empty($request->imagen) && $request->imagen->isValid()){
            Storage::disk('animales')->delete($animal->imagen);

            $animal->imagen= $request->imagen->store('','animales');
        }

        $animal->save();
        return view("animales.show",['animal'=>$animal]);
    }


}
