<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'productName',
        'cat_id',
        'description',
        'price',
        'picture'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    use HasFactory;
}
