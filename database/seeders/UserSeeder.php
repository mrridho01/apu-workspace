<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Muhammad Ridho',
            'email' => 'm.ridho@autopowerindo.co.id',
            'password' => Hash::make('muhammadridhoyphb'),
            'avatar' => 'https://cdn.pixabay.com/photo/2016/04/01/11/25/avatar-1300331_960_720.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
