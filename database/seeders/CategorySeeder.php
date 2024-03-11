<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert(
            [
                [
                    'name' => 'Women U23',
                    'order' => '1',
                    'gender' => 'F',
                    'age_start' => '18',
                    'age_end' => '22',
                    'open' => null,
                ],
                [
                    'name' => 'Women OPEN',
                    'order' => '2',
                    'gender' => 'F',
                    'age_start' => '23',
                    'age_end' => '29',
                    'open' => '1',
                ],
                [
                    'name' => 'Women 30-34',
                    'order' => '3',
                    'gender' => 'F',
                    'age_start' => '30',
                    'age_end' => '34',
                    'open' => null,
                ],
                [
                    'name' => 'Women 35-39',
                    'order' => '4',
                    'gender' => 'F',
                    'age_start' => '35',
                    'age_end' => '39',
                    'open' => null,
                ],
                [
                    'name' => 'Women 40-44',
                    'order' => '5',
                    'gender' => 'F',
                    'age_start' => '40',
                    'age_end' => '44',
                    'open' => null,
                ],
                [
                    'name' => 'Women 45-49',
                    'order' => '6',
                    'gender' => 'F',
                    'age_start' => '45',
                    'age_end' => '49',
                    'open' => null,
                ],
                [
                    'name' => 'Women 50-54',
                    'order' => '7',
                    'gender' => 'F',
                    'age_start' => '50',
                    'age_end' => '54',
                    'open' => null,
                ],
                [
                    'name' => 'Women 55-59',
                    'order' => '8',
                    'gender' => 'F',
                    'age_start' => '55',
                    'age_end' => '59',
                    'open' => null,
                ],
                [
                    'name' => 'Women 50-54',
                    'order' => '9',
                    'gender' => 'F',
                    'age_start' => '50',
                    'age_end' => '54',
                    'open' => null,
                ],
                [
                    'name' => 'Women 55-59',
                    'order' => '10',
                    'gender' => 'F',
                    'age_start' => '55',
                    'age_end' => '59',
                    'open' => null,
                ],
                [
                    'name' => 'Women 60-64',
                    'order' => '11',
                    'gender' => 'F',
                    'age_start' => '60',
                    'age_end' => '64',
                    'open' => null,
                ],
                [
                    'name' => 'Women 65-69',
                    'order' => '12',
                    'gender' => 'F',
                    'age_start' => '65',
                    'age_end' => '69',
                    'open' => null,
                ],
                [
                    'name' => 'Women 70+',
                    'order' => '13',
                    'gender' => 'F',
                    'age_start' => '70',
                    'age_end' => '99',
                    'open' => null,
                ],
                [
                    'name' => 'Men U23',
                    'order' => '21',
                    'gender' => 'M',
                    'age_start' => '18',
                    'age_end' => '22',
                    'open' => null,
                ],
                [
                    'name' => 'Men OPEN',
                    'order' => '22',
                    'gender' => 'M',
                    'age_start' => '23',
                    'age_end' => '29',
                    'open' => '1',
                ],
                [
                    'name' => 'Men 30-34',
                    'order' => '23',
                    'gender' => 'M',
                    'age_start' => '30',
                    'age_end' => '34',
                    'open' => null,
                ],
                [
                    'name' => 'Men 35-39',
                    'order' => '24',
                    'gender' => 'M',
                    'age_start' => '35',
                    'age_end' => '39',
                    'open' => null,
                ],
                [
                    'name' => 'Men 40-44',
                    'order' => '25',
                    'gender' => 'M',
                    'age_start' => '40',
                    'age_end' => '44',
                    'open' => null,
                ],
                [
                    'name' => 'Men 45-49',
                    'order' => '26',
                    'gender' => 'M',
                    'age_start' => '45',
                    'age_end' => '49',
                    'open' => null,
                ],
                [
                    'name' => 'Men 50-54',
                    'order' => '27',
                    'gender' => 'M',
                    'age_start' => '50',
                    'age_end' => '54',
                    'open' => null,
                ],
                [
                    'name' => 'Men 55-59',
                    'order' => '28',
                    'gender' => 'M',
                    'age_start' => '55',
                    'age_end' => '59',
                    'open' => null,
                ],
                [
                    'name' => 'Men 50-54',
                    'order' => '29',
                    'gender' => 'M',
                    'age_start' => '50',
                    'age_end' => '54',
                    'open' => null,
                ],
                [
                    'name' => 'Men 55-59',
                    'order' => '30',
                    'gender' => 'M',
                    'age_start' => '55',
                    'age_end' => '59',
                    'open' => null,
                ],
                [
                    'name' => 'Men 60-64',
                    'order' => '31',
                    'gender' => 'M',
                    'age_start' => '60',
                    'age_end' => '64',
                    'open' => null,
                ],
                [
                    'name' => 'Men M65-69',
                    'order' => '32',
                    'gender' => 'M',
                    'age_start' => '65',
                    'age_end' => '69',
                    'open' => null,
                ],
                [
                    'name' => 'Men 70+',
                    'order' => '33',
                    'gender' => 'M',
                    'age_start' => '70',
                    'age_end' => '99',
                    'open' => null,
                ],

            ]
        );

    }
}
