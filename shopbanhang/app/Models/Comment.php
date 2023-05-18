<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'v_comment';
    protected $primaryKey = 'com_id';
    protected $guarded = [];
}
