<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'Fullname', 'NRICNo', 'Gender', 'Race', 'Dob', 'Address', 'TelephoneNo', 'Occupation', 'Time', 'Married', 'IdNo'
    ];
}
