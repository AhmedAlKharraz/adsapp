<?php

use Illuminate\Database\Seeder;
use App\Models\Warranty;

class WarrantySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warranty::create([
            'warranty_ar' => 'لايوجد',
            'warranty_en' => 'doesnt apply',
        ]);
    }
}
