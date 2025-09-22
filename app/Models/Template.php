<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

   protected $fillable=[
    'id',
    'name',
    'category',
    'description',
    'form_fields',
    
   ];
}
