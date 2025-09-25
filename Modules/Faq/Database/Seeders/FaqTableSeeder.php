<?php

namespace Modules\Faq\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'position' => '01',
                'icon' => 'icofont-stethoscope',
                'title' => 'How do I book an appointment with a doctor?',
                'description' => 'You can book an appointment online through our website or mobile app. Alternatively, you can call our helpline to schedule a consultation with a specialist.',
                'status' => 1,
            ],
            [
                'position' => '02',
                'icon' => 'icofont-hospital',
                'title' => 'Do you provide emergency services?',
                'description' => 'Yes, our emergency department is open 24/7 with ambulance services available for critical patients. Please call our hotline immediately in case of an emergency.',
                'status' => 1,
            ],
            [
                'position' => '03',
                'icon' => 'icofont-medical-sign',
                'title' => 'Can I get an online consultation?',
                'description' => 'Yes, we provide telemedicine services where you can consult with our doctors via video call or phone. Prescriptions are shared digitally after consultation.',
                'status' => 1,
            ],
            [
                'position' => '04',
                'icon' => 'icofont-blood',
                'title' => 'Do you have blood test and diagnostic facilities?',
                'description' => 'Our hospital has a fully equipped pathology lab and diagnostic center. Patients can get blood tests, X-rays, ECGs, ultrasounds, and other investigations done on-site.',
                'status' => 1,
            ],
            [
                'position' => '05',
                'icon' => 'icofont-pills',
                'title' => 'Is pharmacy support available inside the hospital?',
                'description' => 'Yes, we have an in-house pharmacy that operates 24/7, providing both prescribed medicines and over-the-counter drugs.',
                'status' => 1,
            ],
            [
                'position' => '06',
                'icon' => 'icofont-doctor-alt',
                'title' => 'Which specialists are available?',
                'description' => 'We have specialists in cardiology, neurology, gynecology, pediatrics, orthopedics, dermatology, and more. You can check our doctor list online before booking.',
                'status' => 1,
            ],
            [
                'position' => '07',
                'icon' => 'icofont-dollar',
                'title' => 'What are the payment options?',
                'description' => 'We accept cash, credit/debit cards, mobile banking (Bkash, Nagad, Rocket), and health insurance. Payment plans are also available for certain treatments.',
                'status' => 1,
            ],
        ];

        foreach ($data as $item) {
            Faq::create($item);
        }
    }
}
