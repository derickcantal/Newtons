<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products_deliver extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'pdid';
    protected $table = 'products_deliver';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'pname',
        'origprice',
        'qty',
        'stocks',
        'deliverdate',
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
