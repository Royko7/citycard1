<?php

use Illuminate\Database\Seeder;

class TrasportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transports')->insert([
            'transports_name' => 'Автобув 1',
            'transport_type' => 'автобус',
            'course_id' => '1'
        ]);
    }
}
