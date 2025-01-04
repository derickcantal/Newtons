<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_login_log extends Model
{
            protected $table = 'user_login_log';  
            protected $primaryKey = 'ullid';

            protected $dates = [
                'timerecorded',
            ];
            public function gettimerecordedAttribute($dates) {
                return \Carbon\Carbon::parse($dates)->format('Y-m-d h:i:s A');
            }

            protected $fillable = [
                'userid',
                'username',
                'firstname',
                'middlename',
                'lastname',
                'email',
                'accesstype',
                'timerecorded',
                'created_by',
                'updated_by',
                'mod',
                'notes',
                'copied',
                'status',
            ];
}
