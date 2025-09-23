<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\HospitalType;
use App\Enums\Status;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hospitals')->insert([
            [
                'name' => 'City Hospital',
                'type' => HospitalType::HOSPITAL->value,
                'registration_no' => 'REG-2025-001',
                'email' => 'info@cityhospital.com',
                'phone' => '+8801711000001',
                'address' => '123 Main Road, Dhanmondi',
                'district' => 'Dhaka',
                'latitude' => 23.746466,
                'longitude' => 90.376015,
                'website_url' => 'https://cityhospital.com',
                'status' => Status::ACTIVE->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Green Life Clinic',
                'type' => HospitalType::CLINIC->value,
                'registration_no' => null,
                'email' => 'contact@greenlifeclinic.com',
                'phone' => '+8801711000002',
                'address' => '456 Green Avenue, Gulshan',
                'district' => 'Dhaka',
                'latitude' => 23.792500,
                'longitude' => 90.407800,
                'website_url' => null,
                'status' => Status::ACTIVE->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MediTest Diagnostic Center',
                'type' => HospitalType::DIAGNOSTIC_CENTER->value,
                'registration_no' => 'REG-2025-010',
                'email' => 'support@meditest.com',
                'phone' => '+8801711000003',
                'address' => '789 Diagnostic Road, Agrabad',
                'district' => 'Chattogram',
                'latitude' => 22.356900,
                'longitude' => 91.783200,
                'website_url' => 'https://meditest.com',
                'status' => Status::INACTIVE->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Community Health Center',
                'type' => HospitalType::OTHER->value,
                'registration_no' => null,
                'email' => 'healthcenter@community.org',
                'phone' => '+8801711000004',
                'address' => '12/7 Local Road, Rajshahi',
                'district' => 'Rajshahi',
                'latitude' => 24.374500,
                'longitude' => 88.604200,
                'website_url' => null,
                'status' => Status::ACTIVE->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
