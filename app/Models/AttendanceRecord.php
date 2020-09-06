<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    protected $fillable = ['user_id', 'nfc', 'classroom_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function attendanceList()
    {
        return $this->belongsTo('App\Models\AttendanceList');
    }
}
