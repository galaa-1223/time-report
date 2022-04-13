<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'name'       => 'Хэвлэлийн график дизайнч',
            'group'      => '1а',
            'total'      => 28,
            'teacher_id' => 1
        ]);
    }
}
