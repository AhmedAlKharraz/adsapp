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
        $this->call([
            AgeSeeder::class,
            AreaSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            CitySeeder::class,
            ConditionSeeder::class,
            HarddriveSeeder::class,
            MemorySeeder::class,
            ProcessorSeeder::class,
            SubcategorySeeder::class,
            WarrantySeeder::class,
        ]);
    }
}
