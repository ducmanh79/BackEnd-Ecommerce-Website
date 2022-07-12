<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductImages;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'short_desc', 'desc', 'image', 'price', 'category_id', 'thumbnail'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(ProductImages::class);
    }
}
