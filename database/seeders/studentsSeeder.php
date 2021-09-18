<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        'studentName'=>str::random(5),
        'courseHour'=>rand(1,10),
        'studentGender'=>str::random(5),
        'studentAddress'=>str::random(5)

        ]);
    }
}
