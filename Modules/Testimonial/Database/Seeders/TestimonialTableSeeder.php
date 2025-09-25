<?php

namespace Modules\Testimonial\Database\Seeders;

use App\Repositories\Upload\UploadInterface;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Testimonial\Entities\Testimonial;

class TestimonialTableSeeder extends Seeder
{
    private $uploadRepo;

    public function __construct(UploadInterface $uploadRepo)
    {
        $this->uploadRepo = $uploadRepo;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $testimonials = [
            [
                'client_name' => 'Ayesha Rahman',
                'designation' => 'Patient – Cardiology',
                'description' => 'I was admitted for heart treatment and the doctors provided excellent care. The staff explained everything clearly and helped me recover faster than expected.',
                'rating'      => 5,
            ],
            [
                'client_name' => 'Md. Salman Hossain',
                'designation' => 'Patient – Orthopedics',
                'description' => 'After my accident, I received world-class orthopedic treatment here. The physiotherapy sessions were well-planned and I can now walk without support.',
                'rating'      => 2,
            ],
            [
                'client_name' => 'Nusrat Jahan',
                'designation' => 'Patient – Gynecology',
                'description' => 'The gynecology department is very professional. They provided safe maternity care during my pregnancy and supported me throughout the process.',
                'rating'      => 3,
            ],
            [
                'client_name' => 'Tanvir Ahmed',
                'designation' => 'Patient – Neurology',
                'description' => 'I was treated for migraine and the doctors helped me understand the cause and guided me with proper medication and lifestyle changes.',
                'rating'      => 1,
            ],
            [
                'client_name' => 'Shamima Akter',
                'designation' => 'Patient – Pediatrics',
                'description' => 'My child had recurring fever, but the pediatric team handled it with great care and patience. I am truly grateful for their dedication.',
                'rating'      => 5,
            ],
            [
                'client_name' => 'Faruk Chowdhury',
                'designation' => 'Patient – General Surgery',
                'description' => 'I underwent minor surgery here. The environment was clean, the staff was friendly, and I was discharged within a short time.',
                'rating'      => 4.9,
            ],
        ];

        foreach ($testimonials as $index => $data) {
            $testimonial = new Testimonial();
            $testimonial->client_name = $data['client_name'];
            $testimonial->designation = $data['designation'];
            $testimonial->description = $data['description'];
            $testimonial->rating      = $data['rating'];
            $testimonial->image       = $this->uploadRepo->uploadSeederByPath("uploads/seeders/user/user-" . rand(1, 5) . '.png');
            $testimonial->position    = $index + 1;
            $testimonial->save();
        }
    }
}
