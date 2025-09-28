<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodBankSeeder extends Seeder
{
    public function run(): void
    {
        $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];

        $bloodBanks = [
            'Dhaka Medical College Blood Bank',
            'Bangladesh Red Crescent Blood Bank',
            'Square Hospital Blood Bank',
            'Ibrahim Cardiac Blood Bank',
            'Chittagong Medical College Blood Bank',
            'Rajshahi Medical College Blood Bank',
            'Sylhet MAG Osmani Medical Blood Bank',
            'Khulna Medical College Blood Bank',
            'Mymensingh Medical College Blood Bank',
            'United Hospital Blood Bank',
            'Anjuman Mufidul Islam Blood Bank',
            'Apollo (Evercare) Blood Bank',
            'Popular Diagnostic Blood Bank',
            'BIRDEM Blood Bank',
            'Barisal Sher-e-Bangla Medical Blood Bank',
        ];

        $districts = [
            'Dhaka', 'Chattogram', 'Rajshahi', 'Khulna', 'Sylhet',
            'Barisal', 'Rangpur', 'Mymensingh', 'Gazipur',
            'Narayanganj', 'Cumilla', 'Jessore', 'Bogura', 'Feni', 'Cox’s Bazar'
        ];

        foreach ($bloodBanks as $index => $bankName) {
            // Generate available groups with realistic units
            $availableGroups = [];
            $randomGroups = array_rand(array_flip($bloodGroups), rand(4, 7));
            foreach ((array)$randomGroups as $group) {
                $availableGroups[$group] = rand(5, 50); // 5–50 units available
            }

            DB::table('blood_banks')->insert([
                'name'             => $bankName,
                'license_no'       => 'LIC-' . rand(1000, 9999),
                'email'            => strtolower(str_replace(' ', '', $bankName)) . '@gmail.com',
                'phone'            => '01' . rand(3, 9) . rand(10000000, 99999999), // Bangladeshi mobile
                'address'          => 'House ' . rand(1, 200) . ', Road ' . rand(1, 20) . ', ' . $districts[array_rand($districts)],
                'district'         => $districts[array_rand($districts)],
                'latitude'         => rand(220000, 260000) / 10000, // Bangladesh approx (22.0000 – 26.0000)
                'longitude'        => rand(880000, 920000) / 10000, // Bangladesh approx (88.0000 – 92.0000)
                'available_groups' => json_encode($availableGroups, JSON_UNESCAPED_UNICODE),
                'status'           => [Status::ACTIVE->value, Status::INACTIVE->value][rand(0, 1)],
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }
    }
}
