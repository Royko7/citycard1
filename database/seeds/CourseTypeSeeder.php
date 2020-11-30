<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('city_course_types')->insert([
            'course_type' => 'Міський',
            'created_at' => '2020-02-22 17:50:00',
            'updated_at' => '2020-08-29 18:55:37',
        ]);
        DB::table('city_course_types')->insert([
            'course_type' => 'Між міський',
            'created_at' => '2020-02-22 17:50:00',
            'updated_at' => '2020-08-29 18:55:37',
        ]);
    }
}
