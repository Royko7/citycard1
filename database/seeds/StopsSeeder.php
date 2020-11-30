<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'stops_name' => '-',
            'course_id' => 1,
        ]);
    }
}
