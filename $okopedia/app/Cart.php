<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

class Cart extends Model
{
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id', 'product_id', 'quantity'];
    public $timestamps = false;
}
