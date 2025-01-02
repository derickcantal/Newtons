<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schoolyear extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'syid';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'syname',
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
