<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class yearlevel extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'yearlevelid';

    protected $dates = [
        'timerecorded',
    ];
    
    protected $fillable = [
        'levelname',
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