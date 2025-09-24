<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\UploadSeeder;
use Database\Seeders\BloodBankSeeder;
use Database\Seeders\PermissionSeeder;
use Modules\Blog\Database\Seeders\BlogSeeder;
use Modules\Faq\Database\Seeders\FaqTableSeeder;
use Modules\Testimonial\Database\Seeders\TestimonialTableSeeder;
use Modules\SocialLink\Database\Seeders\SocialLinkDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RouteListSeeder::class,
            CurrencySeeder::class,
            LanguageSeeder::class,
            FlagIconSeeder::class,

            SettingSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);

        $this->call(TodoSeeder::class);
        // module seeder
        $this->call(BlogSeeder::class);
       $this->call(SocialLinkDatabaseSeeder::class);
       $this->call(TestimonialTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(HospitalSeeder::class);
        $this->call(BloodBankSeeder::class);
        $this->call(BloodDonorSeeder::class);
        $this->call(AmbulanceSeeder ::class);


    }
}
