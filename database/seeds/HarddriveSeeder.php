<?php

use Illuminate\Database\Seeder;
use App\Models\Harddrive;

class HarddriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Harddrive::create([
            'harddrive_ar' => 'من 0 الى 99 غيغابايت',
            'harddrive_en' => '0 - 99 GB',
        ]);
    }
}
