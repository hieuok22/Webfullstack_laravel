<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'v_order';
    protected $primaryKey = 'order_id';
    protected $guarded = [];
}
