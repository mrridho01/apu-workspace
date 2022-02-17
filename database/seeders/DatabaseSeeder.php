<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        return $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            ProspekSeeder::class,
            ProjectSeeder::class,
            ContractSeeder::class,
            ProjectPhotoSeeder::class,
            ProjectVideoSeeder::class,
            ProjectFileSeeder::class,
            ProjectDrawingSeeder::class,
            RecorderSeeder::class,
            SprecherSeeder::class,
            ServiceSeeder::class,
            RecorderFileSeeder::class,
            SprecherFileSeeder::class,
            ServiceFileSeeder::class
        ]);
    }
}
