<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => 'Pengadaan dan Pemasangan DFR GI 150kV Punagaya',
                'category' => 'dfr',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::tomorrow(),
                'customer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Penggantian RTU GI 150kV Batu Besar',
                'category' => 'sprecher',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::tomorrow(),
                'customer_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Studi Proteksi 20kV MRT Jakarta',
                'category' => 'service',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::tomorrow(),
                'customer_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
