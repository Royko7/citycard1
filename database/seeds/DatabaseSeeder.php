<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CourseTypeSeeder::class);
        $this->call(TransportTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TicketTypeSeeder::class);
//        $this->call(TransportSeeder::class);
//        $this->call(CardSeeder::class);
//        $this->call(HistorySeeder::class);
    }
}
