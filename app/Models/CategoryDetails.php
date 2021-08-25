<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'address', 'status'
    ];
}
