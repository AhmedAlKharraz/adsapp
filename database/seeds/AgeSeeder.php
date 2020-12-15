<?php

use Illuminate\Database\Seeder;
use App\Models\Age;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Age::create([
            'age_ar' => 'جديد',
            'age_en' => 'Brand New',
        ]);
    }
}
