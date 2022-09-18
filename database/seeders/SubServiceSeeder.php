<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_services = [
            'Income Tax Return' => [
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried'
                ],
                [
                    'price' => 2500,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Business'
                ],
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried'
                ],

            ],
            'Sales Tax Registration' => [
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried'
                ]
            ],
            "Company's Registration" => [
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried'
                ]
            ],
            "Intellectual Property" => [
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried'
                ]
            ],
        ];
    }
}
