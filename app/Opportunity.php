<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Opportunity extends Model
{
    //
    protected $table = 'opportunity';

    public $timestamps = false;
}