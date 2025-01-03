<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products_return extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'prid';
    protected $table = 'products_return';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'pname',
        'origprice',
        'qty',
        'stocks',
        'returndate',
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
