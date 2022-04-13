<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            EmployeeSeeder::class,
            ClassSeeder::class,
        ]);
    }
}
