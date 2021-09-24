<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRace extends Model
{
    //
    protected $table = 'user_races';

    public $timestamps = false;
}
