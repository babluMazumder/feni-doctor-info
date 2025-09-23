<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BloodBankSeeder extends Seeder
{
     public function run(): void
    {
        $faker = Faker::create();

        $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];

        foreach (range(1, 15) as $i) {
            // Generate random available groups with units
            $availableGroups = [];
            foreach ($faker->randomElements($bloodGroups, rand(3, 6)) as $group) {
                $availableGroups[$group] = $faker->numberBetween(0, 50); // 0-50 units
            }

            DB::table('blood_banks')->insert([
                'name'            => $faker->company . ' Blood Bank',
                'license_no'      => strtoupper($faker->bothify('LIC-####')),
                'email'           => $faker->unique()->safeEmail,
                'phone'           => $faker->phoneNumber,
                'address'         => $faker->address,
                'district'        => $faker->city,
                'latitude'        => $faker->latitude(-90, 90),
                'longitude'       => $faker->longitude(-180, 180),
                'available_groups'=> json_encode($availableGroups),
                'status'          => $faker->randomElement([Status::ACTIVE->value, Status::INACTIVE->value]),
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}
