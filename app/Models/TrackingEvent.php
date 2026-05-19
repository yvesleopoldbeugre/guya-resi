<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingEvent extends Model
{
    protected $fillable = ['event_category', 'event_name', 'ip_address'];
}
