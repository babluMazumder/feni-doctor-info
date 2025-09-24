<?php

namespace Database\Seeders;

use App\Enums\Status;
use Faker\Factory as Faker;
use App\Enums\AmbulanceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AmbulanceSeeder extends Seeder
{ /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('ambulances')->insert([
                'service_name'     => $faker->company,
                'ambulance_type'   => $faker->randomElement(AmbulanceType::cases())->value, // e.g., AC, Non-AC, ICU
                'registration_no'  => strtoupper($faker->bothify('AMB-####')),
                'driver_name'      => $faker->name,
                'driver_phone'     => $faker->unique()->phoneNumber,
                'phone'            => $faker->phoneNumber,
                'email'            => $faker->optional()->safeEmail,
                'address'          => $faker->address,
                'district'         => $faker->city,
                'latitude'         => $faker->latitude(22.0, 26.0),   // Bangladesh approx lat
                'longitude'        => $faker->longitude(88.0, 92.0), // Bangladesh approx lon
                'status'           => $faker->randomElement([Status::ACTIVE->value, Status::INACTIVE->value]),
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }
    }
}
