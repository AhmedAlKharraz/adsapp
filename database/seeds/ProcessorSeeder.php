<?php

use Illuminate\Database\Seeder;
use App\Models\Processor;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Processor::create([
            'Processor_ar' => 'اقل من 500 ميغا هيرتز',
            'Processor_en' => 'Less Than 500 MHz',
        ]);
    }
}
