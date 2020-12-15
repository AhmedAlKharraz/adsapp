<?php

use Illuminate\Database\Seeder;
use App\Models\Condition;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'condition_ar' => '512 ميغا او اكثر',
            'condition_en' => '512 MB or More',
        ]);
    }
}
