<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $table = 'coupons';
    protected $fillable = [
        'name', 'qty', 'code', 'feature', 'discount_number',
    ];
}
