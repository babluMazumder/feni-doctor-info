<?php

namespace Modules\Faq\Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'position' => '01',
                'icon' => 'icofont-macbook',
                'title' => 'Reques & Booking',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestias qui asperiores omnis deleniti illo natus ipsam, nesciunt alias vero.',
                'status' => 1,
            ],
            [
                'position' => '02',
                'icon' => 'icofont-calendar',
                'title' => 'Dispatch & Scheduling',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestias qui asperiores omnis deleniti illo natus ipsam, nesciunt alias vero.',
                'status' => 1,
            ],
            [
                'position' => '03',
                'icon' => 'icofont-location-arrow',
                'title' => 'Transit & Monitoring',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestias qui asperiores omnis deleniti illo natus ipsam, nesciunt alias vero.',
                'status' => 1,
            ],
            [
                'position' => '04',
                'icon' => 'icofont-bank',
                'title' => 'Delivery & Payment',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestias qui asperiores omnis deleniti illo natus ipsam, nesciunt alias vero.',
                'status' => 1,
            ],
            [
                'position' => '05',
                'icon' => 'icofont-ui-settings',
                'title' => 'Feedback & Support',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet repellendus quibusdam voluptatibus, corporis placeat consequatur exercitationem architecto deserunt odit.',
                'status' => 1,
            ],
        ];

        foreach ($data as $item) {
            Faq::create($item);
        }
    }
}
