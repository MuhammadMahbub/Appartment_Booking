<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rule::create([
            'name' => 'No smoking, parties or events.',
        ]);
        Rule::create([
            'name' => 'Check-in time from 2 PM, check-out by 10 AM.',
        ]);
        Rule::create([
            'name' => 'Time to time car parking',
        ]);
        Rule::create([
            'name' => 'Download Our minimal app',
        ]);
        Rule::create([
            'name' => 'Browse regular our website',
        ]);
    }
}
