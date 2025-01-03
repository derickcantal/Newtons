<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'payid';
    protected $table = 'payments';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'orno',
        'payfor',
        'amount', 
        'cash', 
        'change', 
        'totalamount', 
        'rdate',
        'studentid',
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
