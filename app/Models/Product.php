<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name',
        'id_category',
        'id_client',
        'price',
        'stock'
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    public function client(){
        return $this->hasOne(Client::class, 'id', 'id_client');
    }
}
