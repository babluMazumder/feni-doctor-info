<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Modules\Blog\Entities\Blog;
use App\Repositories\Upload\UploadInterface;

class BlogSeeder extends Seeder
{
    private $uploadRepo;

    public function __construct(UploadInterface $uploadRepo)
    {
        $this->uploadRepo = $uploadRepo;
    }

    public function run()
    {
        $blogs = [
            [
                'title' => '10 Essential Tips for a Healthy Heart',
                'description' => 'Maintaining a healthy heart requires a balanced diet, regular exercise, and proper stress management. In this article, we discuss practical tips like reducing salt intake, avoiding smoking, and practicing mindfulness to keep your heart in good condition.',
            ],
            [
                'title' => 'The Importance of Regular Health Checkups',
                'description' => 'Routine health checkups help detect diseases early and ensure proper treatment. Learn why scheduling annual visits to your doctor can save you from future complications.',
            ],
            [
                'title' => 'Understanding Diabetes: Symptoms, Causes, and Prevention',
                'description' => 'Diabetes is one of the most common chronic diseases today. This article covers its early symptoms, lifestyle factors, and how adopting a healthy lifestyle can prevent type 2 diabetes.',
            ],
            [
                'title' => 'Mental Health Matters: Coping with Stress and Anxiety',
                'description' => 'Mental health is as important as physical health. Discover effective ways to manage stress, reduce anxiety, and maintain a positive mindset through meditation, exercise, and therapy.',
            ],
            [
                'title' => 'Healthy Nutrition: Building a Balanced Diet Plan',
                'description' => 'Eating the right foods ensures your body gets the necessary vitamins and minerals. Learn how to create a balanced diet with fruits, vegetables, proteins, and whole grains.',
            ],
            [
                'title' => 'The Role of Sleep in Maintaining Good Health',
                'description' => 'Sleep is often overlooked, but it is crucial for overall well-being. In this blog, we discuss the benefits of 7–8 hours of sleep and how sleep deprivation affects the body.',
            ],
        ];

        foreach ($blogs as $index => $data) {
            $blog = new Blog();
            $blog->author = 1;
            $blog->seen = 1;
            $blog->position = $index + 1;
            $blog->banner = $this->uploadRepo->uploadSeederByPath('uploads/seeders/img/blog-' . rand(1, 5) . '.jpg');
            $blog->title = $data['title'];
            $blog->slug = Str::slug($data['title']);
            $blog->date = now()->subDays(rand(1, 30));
            $blog->description = $data['description'];
            $blog->save();
        }
    }
}
