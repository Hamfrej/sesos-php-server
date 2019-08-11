<?php

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
        \App\Models\Classroom::create([
            'name' => 'E3',
            'description' => 'Laboratorium komputerowe']);
        \App\Models\Classroom::create([
            'name' => 'E4',
            'description' => 'Laboratorium komputerowe']);
    }
}
