<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'studentid';
    protected $table = 'student';

    protected $dates = [
        'timerecorded',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'birthday',
        'house',
        'street',
        'city',
        'province',
        'fathersname',
        'foccupation',
        'mothersname',
        'moccupation',
        'guardian',
        'relationship',
        'contact',
        'privilege',
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
