<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'phone' => Str::random(10),
//            'phone' => '380777777777',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 10,
            'status'=>'admin'
        ]);
//        DB::table('users')->insert([
//            'name' => 'admin2',
//            'phone' => Str::random(10),
////            'phone' => '380222222222',
//            'email' => 'admin2@admin.com',
//            'password' => bcrypt('admin2'),
//            'role' => 10,
//            'status'=>'admin'
//        ]);
//
//        DB::table('users')->insert([
//            'name' => 'admin3',
//            'phone' => Str::random(10),
////            'phone' => '380333333333',
//            'email' => 'admin3@admin.com',
//            'password' => bcrypt('admin3'),
//            'role' => 10,
//            'status'=>'admin'
//        ]);
//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'phone' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => Hash::make('password'),
//        ]);


    }
}
