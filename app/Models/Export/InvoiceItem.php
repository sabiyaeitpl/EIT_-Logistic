<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    protected $table = 'invoice_items';
    protected $fillable = [
        'invoice_id',
        'counting',
        'dimention',
        'no_of_bag_box',
        'type_bag_box',
        'pkgs_size',
        'item_no',
        'quantity',
        'rate',
        'amount',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    public function product() {
        return $this->belongsTo(Product::class, 'item_no');
    }
    public static function calculateTotals($invoiceId)
    {
        return self::where('invoice_id', $invoiceId)
            ->selectRaw('SUM(no_of_bag_box) as totalbags')
            ->selectRaw('SUM(pkgs_size) as size')
            ->selectRaw('SUM(quantity) as quantity')
            ->selectRaw('SUM(amount) as totalAmount')
            ->selectRaw('SUM((no_of_bag_box * pkgs_size)) as gross_weight')
            ->first();
    }

}
