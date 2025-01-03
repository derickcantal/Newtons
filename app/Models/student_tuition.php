<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_tuition extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'stid';
    protected $table = 'student_tuition';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'studentid',
        'firstname',
        'middlename',
        'lastname',
        'syid',
        'syname',
        'yearlevelid',
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
