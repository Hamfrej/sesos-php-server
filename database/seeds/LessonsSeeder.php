<?php

use App\Models\Lesson;
use App\User;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::create([
            'name' => 'Automatyka i sterowanie',
            'description' => 'Teoria sterowania',
            'lecturer_id' => User::first()->id
        ]);
    }
}
