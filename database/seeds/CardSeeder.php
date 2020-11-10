<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

//use Ramsey\Uuid\Type\Integer;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'user_id' => rand(1,5),
            'balance' => rand(4,13434),
            'number' => rand(10,1323434),
            'created_at' => '2020-02-22 17:50:00',
            'updated_at' => '2020-08-29 18:55:37',
        ]);
    }
}
