<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salesentry extends Model
{
    protected $fillable = [
        'customer_id', 'product_id', 'qty', 'price', 'discount', 'total'
    ];

    public function customer()
    {
        return $this->belongsTo(Student::class, 'customer_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
