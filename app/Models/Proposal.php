<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable=[
    'company_name',
    'contact_person',
    'email',
    'phone',
    'address',
    'title',
    'executive_summary',
    'start_date',
    'end_date',
    'logo-path'
   ];
}
