<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Income Tax Return',
            'Sales Tax Registration',
            "Company's Registration",
            "Intellectual Property"
        ];

        foreach($services as $service) {
            Service::create([
                'title' => $service
            ]);
        }
    }
}
