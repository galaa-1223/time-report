<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'firstname' => 'Лувсанвандан',
            'lastname'  => 'Дорж',
            'position'  => 'Дэд захирал',
            'sex'       => 'male',
            'email'     => 'luu@yahoo.com',
            'code'      => '12345678',
            'phone'     => '88118811',
            'image'     => null,
            'password'  => Hash::make('12345678'),
        ]);
    }
}
