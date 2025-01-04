<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class expenses extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'eid';
    protected $table = 'expenses';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'ecid',
        'avatar',
        'ename',
        'expdatetime',
        'rid',
        'rname',
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
