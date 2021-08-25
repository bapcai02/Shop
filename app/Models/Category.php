<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $key = 'id';
    protected $fillable = [
        'category_name', 'category_description', 'category_status', 'category_slug', 'category_keyword'
    ];
}
