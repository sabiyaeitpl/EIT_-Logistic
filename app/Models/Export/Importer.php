<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'crno',
        'pobox',
        'address',
        'gst',
        'status',
    ];
}
