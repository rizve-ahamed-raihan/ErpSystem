<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $table = 'products';  // <-- correct table name
    protected $fillable = ['name', 'price']; // allows mass assignment
}
