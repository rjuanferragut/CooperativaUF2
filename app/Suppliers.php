<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = [
      'name', 'description', 'email', 'address', 'phone',
    ];
}
