<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'full_name'  => 'Administrator',
            'email'      => 'khaianhaktb@gmail.com',
            'status'     => 1,
            'password'   => Hash::make('12345678'),
            'join_date'  => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
           
            'full_name'   => 'Sale ',
            'email'       => 'khaianhaktb9@gmail.com',
            'status'      => 1,
            'password'    => Hash::make('12345678'),
            'join_date'   => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
       
            'full_name'   => 'IT ',
            'email'       => 'khaianhaktb10@gmail.com',
            'status'      => 1,
            'password'    => Hash::make('12345678'),
            'join_date'   => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
          
            'full_name'   => 'Đại lý Khải Anh',
            'email'       =>'khaianhaktb11@gmail.com',
            'status'      => 0,
            'password'    => Hash::make('12345678'),
            'join_date'   => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    
    }
}
