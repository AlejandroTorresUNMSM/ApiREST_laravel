<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    // para no traer las fechas de creacion y actualizacion
    public $timestamps = false;
    // los campos que vamos a obtener
    protected $fillable = ['id','cat_nom','cat_obs'];
}
