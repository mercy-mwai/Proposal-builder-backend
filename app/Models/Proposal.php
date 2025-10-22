<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable=[
    'user_id',
    'template_type',
    'form_data',
    'status',
    'payment_status'
   ];
}
