<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class RegistrationWebinar extends Model
{
    //
    protected $table = 'registration_webinar';

    public $timestamps = false;
}