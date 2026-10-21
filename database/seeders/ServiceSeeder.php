<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Building modern and responsive websites.',
                'icon' => 'fa-user-tie',
            ],
            [
                'title' => 'Web Design',
                'description' => 'Creating attractive and user-friendly designs.',
                'icon' => 'fa-chart-pie',
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Improving website visibility in search engines.',
                'icon' => 'fa-chart-line',
            ],
            [
                'title' => 'Database Management',
                'description' => 'Designing and managing efficient databases.',
                'icon' => 'fa-chart-area',
            ],
            [
                'title' => 'Technical Support',
                'description' => 'Providing technical assistance and troubleshooting.',
                'icon' => 'fa-balance-scale',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
