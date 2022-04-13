<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'firstname' => 'Баярсайхан',
            'lastname'  => 'Батмандах',
            'position'  => 'Компьютерийн багш',
            'sex'       => 'male',
            'email'     => 'galaa.1223@yahoo.com',
            'code'      => '12345678',
            'phone'     => '88118811',
            'image'     => null,
            'password'  => Hash::make('12345678'),
        ]);
    }
}
