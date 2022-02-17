<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospeks')->insert([
            [
                'title' => 'DFR GH 20kV Selayar',
                'category' => 'dfr',
                'customer_id' => 1,
                'description' => 'Ekstensi DFR 20kV GH PLTD Selayar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'RTU Gardu Tengah',
                'category' => 'sprecher',
                'customer_id' => 2,
                'description' => 'Pemasangan RTU GH 20kV Keypoiny',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Pengukuran PQ TSS Tersebar',
                'category' => 'service',
                'customer_id' => 3,
                'description' => 'Pengukuran di masin-masing TSS tersebar 20kV',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
