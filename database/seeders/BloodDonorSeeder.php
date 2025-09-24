<?php

namespace Database\Seeders;

use App\Enums\Gender;
use App\Enums\Status;
use App\Enums\BloodGroup;
use App\Enums\Availability;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BloodDonorSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('blood_donors')->insert([
                'name'              => $faker->name,
                'phone'             => $faker->unique()->phoneNumber,
                'email'             => $faker->unique()->safeEmail,
                'address'           => $faker->address,
                'district'          => $faker->city,
                'last_donation_date' => optional($faker->optional()->dateTimeBetween('-1 years', 'now'))->format('Y-m-d'),
                'gender'            => $faker->randomElement(Gender::cases())->value,
                'blood_group'       => $faker->randomElement(BloodGroup::cases())->value,
                'availability'      => $faker->randomElement(Availability::cases())->value,
                'status'            => $faker->randomElement([Status::ACTIVE->value, Status::INACTIVE->value]),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
