<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'price' => '1 ',
            'transport_id' => 1,
            'course_id' => 1,
            'course_type_id' => 1,
            'ticket_id' => 1,
        ]);
    }
}
