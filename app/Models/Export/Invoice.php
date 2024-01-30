<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'exporter_id',
        'invoice_no',
        'date_invoice',
        'dispatch_date',
        'po_no',
        'order_by_date',
        'importer_id1',
        'importer_id2',
        'awb_no',
        'gst_no',
        'buyer_consigne',
        'pre_carriage',
        'pre_carrier',
        'country_origin_goods',
        'country_final_destination',
        'vesel',
        'flight_no',
        'port_of_loading',
        'port_of_discharge',
        'final_destination',
        'bank1',
        'bank2',
    ];

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
    public function exporter()
    {
        return $this->belongsTo(Company::class, 'exporter_id');
    }

    public function importer()
    {
        return $this->belongsTo(Importer::class, 'importer_id1');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank1');
    }
}
