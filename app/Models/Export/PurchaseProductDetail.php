<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseProductDetail extends Model
{
    use HasFactory;
    protected $table  = "purchase_product_details";
    protected $fillable = [
        'purchase_id',
        'product_id',
        'box_or_bag',
        'box_weight',
        'no_of_box',
        'packing_size',
        'net_quantity',
        'box_weight_kg',
        'box_gross_weight',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function box()
    {
        return $this->belongsTo(BoxMaster::class, 'box_or_bag');
    }

}
