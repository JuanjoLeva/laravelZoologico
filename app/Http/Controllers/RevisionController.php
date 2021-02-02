<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function create(Animal $animal)
    {
        return view("revisiones.create",compact("animal"));
    }

    public function store(Request $request, Animal $animal){

        $datos=$request->all();

        $datos['animal_id']=$animal->id;

        $nuevaRevision=Revision::create($datos);

        return view("animales.show",compact("animal"));
    }
}
