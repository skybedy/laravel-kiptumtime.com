<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'name' => 'kiptumtime',
            'second_name' => null,
            'time' => '7235',
            'date_start' => '2024-02-12',
            'date_end' => '2024-12-10',
        ]);


    }
}
