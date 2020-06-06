<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  protected $fillable = [
    'user_id', 'total', 'comments',
  ];
}
