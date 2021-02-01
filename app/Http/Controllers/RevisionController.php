<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function store(Request $request){

        $datos=$request->all();

        $nuevaRevision=Revision::create($datos);

        return view("animales.show",['revision'=>$nuevaRevision]);
    }
}
