<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class expenses_receiver extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'erid';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'ername',
        'address',
        'contact',
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
