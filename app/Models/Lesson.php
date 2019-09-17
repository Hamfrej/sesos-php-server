<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['name', 'description', 'lecturer_id'];

    public function attendanceLists()
    {
        return $this->hasMany('App\Models\AttendanceList');
    }
}
