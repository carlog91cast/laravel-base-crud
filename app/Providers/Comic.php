<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'type',
        'sale_date'
    ];
}
