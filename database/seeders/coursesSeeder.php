<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('courses')->insert([
        'courseName'=>str::random(5),
        'courseHour'=>rand(1,10)
     ]) ;  
    }
}
