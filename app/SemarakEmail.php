<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemarakEmail extends Model
{
    //
    protected $table = 'semarak_email';

    public $timestamps = false;
}
