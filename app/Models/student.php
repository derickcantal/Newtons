<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'sid';
    protected $table = 'student';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'studentid',
        'levelid',
        'levelname',
        'syid',
        'syname',
        'username',
        'avatar',
        'email',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'house',
        'street',
        'brgy',
        'city',
        'province',
        'fathersname',
        'foccupation',
        'mothersname',
        'moccupation',
        'guardian',
        'relationship',
        'contact',
        'accesstype',
        'status',
        'notes',
        'created_by',
        'updated_by',
        'timerecorded',
        'posted',
        'mod',
        'copied',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
