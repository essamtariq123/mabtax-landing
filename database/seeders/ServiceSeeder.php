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
            ['name' => 'Income Tax Return', 'slug' => 'income-tax'],
            ['name' => 'Sales Tax Registration', 'slug' => 'sales-tax'],
            ['name' => "Company's Registration", 'slug' => 'company-registration'],
            ['name' => "Intellectual Property", 'slug' => 'intellectual-property']
        ];

        foreach($services as $service) {
            Service::create([
                'title' => $service['name'],
                'slug' => $service['slug']
            ]);
        }
    }
}
