<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class transaction extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    protected $fillable = ['user_id', 'product_id', 'Quantity','date'];
}
