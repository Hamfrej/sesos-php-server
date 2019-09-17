<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name', 'description'];

    public function attendanceLists()
    {
        return $this->hasMany('App\Models\AttendanceList');
    }
}
