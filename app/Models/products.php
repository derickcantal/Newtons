<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'pid';
    protected $table = 'products';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'pname',
        'avatar',
        'qty',
        'stocks',
        'origprice', 
        'sellprice', 
        'status',
        'notes',
        'created_by',
        'updated_by',
        'timerecorded',
        'posted',
        'mod',
        'copied',
    ];
}
