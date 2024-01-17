<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'goods_id');
    }
}
