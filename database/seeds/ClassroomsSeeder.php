<?php

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::create([
            'name' => 'E3',
            'description' => 'Laboratorium komputerowe']);
        Classroom::create([
            'name' => 'E4',
            'description' => 'Laboratorium komputerowe']);
    }
}
