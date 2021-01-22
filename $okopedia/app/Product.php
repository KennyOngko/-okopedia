<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Cart;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'price', 'image'];
    
    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
