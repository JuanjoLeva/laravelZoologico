<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $table="cuidadores";

    //protected $fillable=['especie','peso'......];
    protected $guarded=[];


    public function animales()
    {
        return $this->belongsToMany(Animal::class);
    }
}
