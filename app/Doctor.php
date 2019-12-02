<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['identification_card', 'name', 'last_name', 'gender', 'birthdate', 'direction'];
}
