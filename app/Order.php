<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Order extends Model
{
    protected $connection = 'mysql2';

	protected $table = 'orders';

	public $timestamps = false;
    //
}