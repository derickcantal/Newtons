<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class expenses_category extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'ecid';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'ecname',
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
