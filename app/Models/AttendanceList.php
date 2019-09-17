<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceList extends Model
{
    protected $fillable = ['lesson_id', 'classroom_id', 'start_date', 'end_date'];

    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }
}
