<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Repositories\Upload\UploadInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
     private $uploadRepo;

    public function __construct(UploadInterface $uploadRepo)
    {
        $this->uploadRepo = $uploadRepo;
    }
    public function run(): void
    {
         $categories = [
            ['title' => 'Internal Medicine','sub_title'=>'Diabetes • High Blood Pressure • Fever','icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/arthritis.png'),'position' => 1, 'status' => Status::ACTIVE->value],
            ['title' => 'Dental Care','sub_title'=>'Toothache • Cavity • Gum Disease', 'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/floss.png'),'position' => 2, 'status' => Status::ACTIVE->value],
            ['title' => 'Urology Care','sub_title'=>'Kidney Stone • Urinary Tract Infection', 'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/cancer-cell.png'), 'position' => 3, 'status' => Status::ACTIVE->value],
            ['title' => 'Neurology Care','sub_title'=>'Migraine • Stroke • Nerve Disorders', 'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/brain.png'), 'position' => 4, 'status' => Status::ACTIVE->value],
            ['title' => 'Cardiology Care','sub_title'=>'Chest Pain • Blockage • Heart Failure', 'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/cardiology.png'), 'position' => 5, 'status' => Status::ACTIVE->value],
            ['title' => 'Pulmonology Care','sub_title'=>'Asthma • Cough • Lung Infections', 'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/drug.png'), 'position' => 6, 'status' => Status::ACTIVE->value],
            ['title' => 'Gastroenterology','sub_title'=>'Gastric • Ulcer • Liver Problems',  'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/dna.png'),'position' => 7, 'status' => Status::ACTIVE->value],
            ['title' => 'Orthopedic Care','sub_title'=>'Bone Fracture • Arthritis • Joint Pain',  'icon' =>$this->uploadRepo->uploadSeederByPath('uploads/seeders/icons/hypertension.png'),'position' => 8, 'status' => Status::ACTIVE->value],
        ];

        DB::table('categories')->insert($categories);
    }
}
