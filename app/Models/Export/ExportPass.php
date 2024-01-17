<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExportPass extends Model
{
    use HasFactory;

    protected $table = 'export_passes';

    protected $fillable = [
        'name',
        'reference_id',
        'exporter_id',
        'importer_name1',
        'importer_name2',
        'importer_address1',
        'importer_address2',
        'means_of_transport',
        'port_of_loading',
        'port_of_discharge',
        'final_destination',
        'marks_of_package',
        'type_of_packeg',
        'total_package',
        'no_of_package',
        'description_of_goods',
        'origin_criteria',
        'gross_weight_quantity',
        'net_weight_quantity',
        'invoice_no',
        'date',
        'export_to',
        'place',
        'designation',
        'place_date',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'exporter_id');
    }

    public function goods()
    {
        return $this->belongsTo(Goods::class, 'no_of_package');
    }
}
