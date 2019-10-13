<?php

use App\Models\AttendanceList;
use App\Models\Classroom;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AttendanceListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceList::create([
            'lesson_id' => Lesson::first()->id,
            'classroom_id' => Classroom::first()->id,
            'start_date' => DateTime::createFromFormat('d/m/Y H:i', '01/12/2019 08:15'),
            'end_date' => DateTime::createFromFormat('d/m/Y H:i', '01/12/2019 10:00')
        ]);
    }
}
