<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sku', 'product_name', 'weight', 'point_1', 'point_2', 'point_3', 'image', 'colour', 'material', 'range', 'size', 'type', 'oven_save', 'dishwasher_save', 'wash_by_hand', 'guarantee_period', 'price', 'stock'];
}
