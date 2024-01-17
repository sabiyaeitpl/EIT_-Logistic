<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey="id";
	public $timestamps = true;
	protected $fillable = ['id', 'cat_name', 'cat_code'];
}
