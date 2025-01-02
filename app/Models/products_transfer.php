<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products_transfer extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'ptid';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'pname',
        'origprice',
        'qty',
        'stocks',
        'purchasedate',
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
