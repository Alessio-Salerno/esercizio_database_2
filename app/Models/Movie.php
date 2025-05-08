<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // ARRAY DEI CAMPI DEL DB
   protected $fillable = [
     'title' , 'director', 'year' , 'plot'
   ];

   
}
