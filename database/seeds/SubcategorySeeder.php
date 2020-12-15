<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'subcategory_ar' => 'كمبيوتر',
            'subcategory_en' => 'Computer',
        ]);
    }
}
