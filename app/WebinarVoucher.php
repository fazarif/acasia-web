<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class WebinarVoucher extends Model
{
    //
    protected $table = 'webinar_voucher';

    public $timestamps = false;
}
