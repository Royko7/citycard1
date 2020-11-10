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
            'transport_name' => 'Автобуc 22 ',
            'type_id' => 1,
            'course_id' => 1,
        ]);
    }
}
