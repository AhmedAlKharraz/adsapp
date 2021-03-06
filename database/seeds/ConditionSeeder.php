<?php

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'condition_ar' => 'ممتاز من الداخل والخارج',
            'condition_en' => 'Perfect inside and outside',
        ]);
    }
}
