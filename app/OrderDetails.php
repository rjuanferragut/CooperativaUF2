<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
  protected $fillable = [
    'id_product', 'id_order', 'quantity', 'description',
  ];
}
