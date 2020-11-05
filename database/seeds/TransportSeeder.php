<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transports')->insert([
            'transport_name' => 'Автобув 1',
            'transport_type' => 'автобус',
            'course_id' => 1
        ]);
    }
}
