<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tuition extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'tuitionid';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'levelid',
        'levelname',
        'reg',
        'compfee',
        'labfee',
        'tuitionfee',
        'books',
        'ins',
        'id',
        'testpaper',
        'totalfees',
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
