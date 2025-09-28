<?php

namespace Database\Seeders;

use App\Enums\Gender;
use App\Enums\Status;
use App\Enums\BloodGroup;
use App\Enums\Availability;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BloodDonorSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Bangladeshi districts (Bangla)
        $districts = [
            'ঢাকা', 'চট্টগ্রাম', 'রাজশাহী', 'খুলনা', 'বরিশাল', 'সিলেট',
            'রংপুর', 'ময়মনসিংহ', 'কুমিল্লা', 'গাজীপুর', 'নারায়ণগঞ্জ',
            'ফেনী', 'নোয়াখালী', 'কক্সবাজার', 'যশোর', 'বগুড়া'
        ];

        // Sample Bangla names
        $banglaNames = [
            'মোহাম্মদ আকবর হোসেন', 'সাবরিনা রহমান', 'মো. শাহাদাত হোসেন',
            'তাসমিয়া আক্তার', 'রিয়াদুল ইসলাম', 'ফারহানা হক',
            'নুসরাত জাহান', 'মো. সাইফুল ইসলাম', 'আরিফুল হক', 'মাহমুদুল হাসান'
        ];

        // Bangla addresses
        $banglaAddresses = [
            'বসুন্ধরা আবাসিক এলাকা, ঢাকা',
            'নাসিরাবাদ, চট্টগ্রাম',
            'শাহ মখদুম এলাকা, রাজশাহী',
            'খুলনা নিউ মার্কেট এলাকা',
            'সদর রোড, বরিশাল',
            'জিন্দাবাজার, সিলেট',
            'কারমাইকেল কলেজ সংলগ্ন, রংপুর',
            'ত্রিশাল, ময়মনসিংহ',
            'কুমিল্লা ক্যান্টনমেন্ট এলাকা',
            'চাষাড়া, নারায়ণগঞ্জ',
        ];

        for ($i = 0; $i < 60; $i++) {
            $name = $faker->randomElement($banglaNames);
            $email = str_replace(' ', '', strtolower(transliterator_transliterate('Any-Latin; Latin-ASCII;', $name))) . rand(10, 99) . '@gmail.com';
            $address = $faker->randomElement($banglaAddresses);

            DB::table('blood_donors')->insert([
                'name'              => $name,
                'phone'             => '01' . rand(3, 9) . rand(10000000, 99999999), // Bangladeshi format
                'email'             => $email,
                'address'           => $address,
                'district'          => $faker->randomElement($districts),
                'last_donation_date' => ($faker->optional()->dateTimeBetween('-1 years', 'now')),
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
