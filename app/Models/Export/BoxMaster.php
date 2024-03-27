<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxMaster extends Model
{
    use HasFactory;
    protected $table = 'box_masters';
    protected $fillable = [
        'box_name',
        'box_size',
        'box_weight',
        'box_price',
        'box_price_usd'
    ];
}
