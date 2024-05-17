<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['products_name', 'category_id' ,'price', 'stock'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

}
