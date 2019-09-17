<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceList extends Model
{
    protected $fillable = ['classroom_id', 'start_time', 'end_time'];
}
