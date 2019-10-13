<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ClassroomsSeeder::class);
        $this->call(LessonsSeeder::class);
        $this->call(AttendanceListsSeeder::class);

    }
}
