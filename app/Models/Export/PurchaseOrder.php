<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $table = 'purchase_orders';
    protected $fillable = [
        'exporter_id',
        'importer_id',
        'organization_id',
        'buyer_or_no',
        'buyer_or_date',
        'confirmation_type',
        'po_no',
        'date_of_packing',
        'flight_date',
        'gross_weight_limit',
        'vessel',
        'flight_no',
        'port_of_discharge',
        'final_destination',
        'box_marking',
        'status',
        'send_status',
    ];
      public function items()
    {
        return $this->hasMany(Product::class);
    }
    public function exporter()
    {
        return $this->belongsTo(Company::class, 'exporter_id');
    }

    public function importer()
    {
        return $this->belongsTo(Importer::class, 'importer_id');
    }
}
