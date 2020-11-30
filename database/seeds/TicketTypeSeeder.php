<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ticket_types')->insert([
            'ticket_type' => 'Дитячий ',
        ]);
        DB::table('ticket_types')->insert([
            'ticket_type' => 'Студентський',
        ]);
        DB::table('ticket_types')->insert([
            'ticket_type' => 'Дорослий ',
        ]);
        DB::table('ticket_types')->insert([
            'ticket_type' => 'Пенційний ',
        ]);
        DB::table('ticket_types')->insert([
            'ticket_type' => 'Пенційний ',
        ]);
        DB::table('ticket_types')->insert([
            'ticket_type' => 'Пільговий ',
        ]);
    }

}
