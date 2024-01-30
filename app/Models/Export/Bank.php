<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'banks';
    protected $fillable = [
            'bank_name',
            'account_name',
            'account_number',
            'swift_code',
            'ifsc_code',
            'dealer_code',
            'address'
        ];
}
