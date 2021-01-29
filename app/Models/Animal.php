<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table="animales";

    //protected $fillable=['especie','peso'......];
    protected $guarded=[];

    public function getEdad()
    {
        $fechaFormateada=Carbon::parse($this->fechaNac);
        return $fechaFormateada->diffInYears(Carbon::now());
    }

    public function revisiones()
    {
        return $this->hasMany(Revision::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
