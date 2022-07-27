<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'stock',
        'discount',
        'warranty',
        'description',
        'image',
        'price',
    ];

    public function item_images()
    {
        return $this->hasMany('App\Models\Item_image');
    }
}
