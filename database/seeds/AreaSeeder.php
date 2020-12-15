<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'area_ar' => 'أبوظبي',
            'area_en' => 'Abu Dhabi',
        ]);
    }
}
