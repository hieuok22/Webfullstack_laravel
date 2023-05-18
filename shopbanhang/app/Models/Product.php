<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'v_products';
    protected $primaryKey = 'prod_id';
    protected $guarded = [];
}
