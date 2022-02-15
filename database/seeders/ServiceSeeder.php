<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Laporan Investigasi Mala Kerja Rele 20kV MRT Jakarta',
            'project_id' => 3,
            'description' => 'Laporan akhir terhadap investigasi kejadian blackout MRT Jakarta bulan Oktober 2021',
            'report_path' => asset('storage/report/report/pptx'),
            'created_at' => Carbon::now(),
            'deleted_at' => Carbon::now()
        ]);
    }
}
