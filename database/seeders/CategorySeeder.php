<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            ['title' => 'Internal Medicine', 'position' => 1, 'status' => Status::ACTIVE->value],
            ['title' => 'Dental Care', 'position' => 2, 'status' => Status::ACTIVE->value],
            ['title' => 'Urology Care', 'position' => 3, 'status' => Status::ACTIVE->value],
            ['title' => 'Neurology Care', 'position' => 4, 'status' => Status::ACTIVE->value],
            ['title' => 'Cardiology Care', 'position' => 5, 'status' => Status::ACTIVE->value],
            ['title' => 'Pulmonology Care', 'position' => 6, 'status' => Status::ACTIVE->value],
            ['title' => 'Gastroenterology', 'position' => 7, 'status' => Status::ACTIVE->value],
            ['title' => 'Orthopedic Care', 'position' => 8, 'status' => Status::ACTIVE->value],
        ];

        DB::table('categories')->insert($categories);
    }
}
