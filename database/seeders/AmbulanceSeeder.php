<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Enums\AmbulanceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbulanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceNames = [
            'Dhaka Medical Ambulance Service',
            'Square Hospital Ambulance',
            'Apollo Ambulance',
            'Popular Diagnostic Ambulance',
            'Anjuman Mufidul Islam Ambulance',
            'Chittagong Medical Ambulance',
            'Rajshahi Medical Ambulance',
            'Khulna City Ambulance',
            'Sylhet Emergency Ambulance',
            'United Hospital Ambulance'
        ];

        $districts = [
            'Dhaka', 'Chattogram', 'Rajshahi', 'Khulna', 'Sylhet',
            'Barisal', 'Rangpur', 'Mymensingh', 'Cumilla', 'Gazipur',
            'Narayanganj', 'Bogura', 'Feni', 'Cox’s Bazar', 'Jessore'
        ];

        $driverNames = [
            'Abdul Karim', 'Shafiqul Islam', 'Nazmul Huda', 'Kamrul Hasan',
            'Rakibul Alam', 'Jahangir Kabir', 'Shamim Reza', 'Mizanur Rahman',
            'Tariqul Islam', 'Faruque Ahmed', 'Mahfuzur Rahman', 'Habibur Rahman'
        ];

        foreach (range(1, 20) as $index) {
            DB::table('ambulances')->insert([
                'service_name'    => $serviceNames[array_rand($serviceNames)],
                'ambulance_type'  => collect(AmbulanceType::cases())->random()->value,
                'registration_no' => 'DHA-' . rand(1000, 9999),
                'driver_name'     => $driverNames[array_rand($driverNames)],
                'driver_phone'    => '01' . rand(3, 9) . rand(10000000, 99999999), // Bangladeshi 11-digit
                'phone'           => '01' . rand(3, 9) . rand(10000000, 99999999),
                'email'           => strtolower('ambulance' . $index . '@gmail.com'),
                'address'         => 'Road No. ' . rand(1, 50) . ', ' . $districts[array_rand($districts)],
                'district'        => $districts[array_rand($districts)],
                'latitude'        => rand(220000, 260000) / 10000,  // 22.0000 – 26.0000
                'longitude'       => rand(880000, 920000) / 10000,  // 88.0000 – 92.0000
                'status'          => [Status::ACTIVE->value, Status::INACTIVE->value][rand(0, 1)],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}
