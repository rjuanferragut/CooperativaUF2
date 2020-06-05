<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
      'name', 'price', 'description', 'id_supplier',
    ];
}
