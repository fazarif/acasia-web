<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebReminderStatus extends Model
{
    //
    protected $table = 'web_reminder_status';

    public $timestamps = false;
}
