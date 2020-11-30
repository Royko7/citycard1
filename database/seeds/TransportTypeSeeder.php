<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transport_types')->insert([
            'transport_type' => 'Автобуc ',
        ]);
        DB::table('transport_types')->insert([
            'transport_type' => 'Тролейбус ',
        ]);
    }
}
