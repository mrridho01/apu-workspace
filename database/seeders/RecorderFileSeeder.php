<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecorderFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recorder_files')->insert([
            'title' => 'RAB DFR',
            'path' => asset('storage/recorder_files/recorder_file.pdf'),
            'recorder_id' => 1
        ]);
    }
}
