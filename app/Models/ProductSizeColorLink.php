<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizeColorLink extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function Color(){
        return $this->belongsTo(Color::class, 'color_id', 'color_id');
    }

    public function Size(){
        return $this->belongsTo(Size::class, 'size_id', 'size_id');
    }
}
