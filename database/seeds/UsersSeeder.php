<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@p.lodz.pl',
            'password' => Hash::make('secret'),
            'university_id' => '123456',
            'nfc_id' => '[132,456,789,123]'
        ]);
    }
}
