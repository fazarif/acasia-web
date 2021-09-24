<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SrUser extends Model
{
    //
    protected $table = 'sr_users';

    public $timestamps = false;
}
