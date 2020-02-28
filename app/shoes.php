<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoes extends Model
{
     protected $fillable=[
   'nombre', 'imagen', 'precio', 'descripcion'
   ];
}
