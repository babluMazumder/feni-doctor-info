<?php

namespace Modules\Section\Database\Seeders;

use App\Enums\Status;
use App\Repositories\Upload\UploadInterface;
use Illuminate\Database\Seeder;
use Modules\Section\Enums\Type;
use Modules\Section\Entities\Section;
use Illuminate\Database\Eloquent\Model;

class SectionTableSeeder extends Seeder
{
    private $uploadRepo;

    public function __construct(UploadInterface $uploadRepo)
    {
        $this->uploadRepo = $uploadRepo;
    }

    public function run()
    {
        Model::unguard();

        $this->ContactUs();
        // $this->Counter();
        // $this->socialLink();
        // $this->header();
        $this->heroSection();
        $this->AboutUs();


        $this->FAQ(); //
        // $this->FAQStyleTwo(); //
        $this->ClientReview();  // Testimonials
        $this->Blogs();
        $this->Clients();
        // $this->Signin();
        // $this->Signup();
        $this->Breadcrumb();

        $this->CTA();


        $this->popups_content();
    }



    public function heroSection()
    {
        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'hero_image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/img-7.jpg"),
        ]);


        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'short_title',
            'value' => '24H Delivery'
        ]);
        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'appointment_button',
            'value' => 'appointment'
        ]);

        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'appointment_button_link',
            'value' => 'https://percelyflyfff.com'
        ]);
        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'discover_button',
            'value' => 'discover'
        ]);

        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'discover_button_link',
            'value' => 'https://percelyflyfff.com'
        ]);


        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => "hero_section_title",
            'value' => '24/7 Emergency Service'
        ]);

        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'hero_section_short_description',
            'value' => 'Caring for Health Caring for You'
        ]);
        Section::create([
            'type'  => Type::HERO_SECTION,
            'key'   => 'description',
            'value' => 'et consectetur adipisicing elit. Commodi nulla quibusdam sdf s fwefsdf'
        ]);
    }

    // public function socialLink()
    // {
    //     Section::create([
    //         'type'  => Type::SOCIAL_LINK,
    //         'key'   => 'hero_image',
    //         'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/tracking-image-1.jpg"),
    //     ]);
    // }

    public function ContactUs()
    {
        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'title',
            'value' => 'Contact Us'
        ]);

        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'description',
            'value' => 'RX is a complete platform for end-to-end delivery and logistics services for any business or personal needs. The services include parcel delivery, bulk shipment, line hall, truck rental, loading-unloading, warehouse, logistics services and customized solutions as required Us'
        ]);

        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'address',
            'value' => 'Address:4th floor, Feni Center, Feni-3900, Bangladesh'
        ]);
        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'phone',
            'value' => "+8801811843300"
        ]);

        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'email',
            'value' => 'support@bugbuild.com'
        ]);
        // Section::create([
        //     'type'  => Type::CONTACT_US,
        //     'key'   => 'Breadcrumb_image',
        //     'value' => $this->uploadRepo->uploadSeederByPath("frontend/assets/img/logistics-img/breadcrumb-img-4.jpg")
        // ]);
        // Section::create([
        //     'type'  => Type::CONTACT_US,
        //     'key'   => 'left_info_image',
        //     'value' => $this->uploadRepo->uploadSeederByPath("frontend/assets/img/logistics-img/shap-1.png")
        // ]);
        // Section::create([
        //     'type'  => Type::CONTACT_US,
        //     'key'   => 'right_info_image',
        //     'value' => $this->uploadRepo->uploadSeederByPath("frontend/assets/img/logistics-img/hero-2.jpg")
        // ]);
        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'website',
            'value' => 'https://bugbuild.com/'
        ]);

        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'map',
            'value' => 'https://maps.google.com/maps?q=feni%20bangladesh&t=&z=7&ie=UTF8&iwloc=&output=embed'
        ]);
    }


    public function AboutUs()
    {
        $data = [
            ['key' => 'section_tagline',             'value' => 'KNOW ABOUT OUR TRANSPORT'],
            ['key' => 'section_main_title',          'value' => 'We Guarantee Fast & Safe Transport for You'],
            ['key' => 'total_satisfied_clients',     'value' => '4.2k'],
            ['key' => 'satisfied_clients_label',     'value' => 'Satisfied Clients'],
            ['key' => 'left_service_title',          'value' => 'Affordable Cost'],
            ['key' => 'left_service_icon',           'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/hand.png')],
            ['key' => 'right_service_title',         'value' => 'On Time Delivery'],
            ['key' => 'right_service_icon',           'value' => $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/002-delivery-man.png')],
            ['key' => 'promotional_red_text',        'value' => 'Duis aute irure dolor in reprehenderit in velit esse cillum dolore eu nulla pariatur.'],
            ['key' => 'primary_button_text',         'value' => 'Discover More'],
            ['key' => 'primary_button_link',          'value' => 'https://bugbuild.com/'],
            ['key' => 'contact_title',               'value' => 'Call Us free'],
            ['key' => 'contact_number',              'value' => '+9993256589'],
            ['key' => 'section_description',         'value' => 'Arki features minimal and stylish design. The theme is well crafted for all the modern architect and interior design website. With Arki, it makes your website look even more attractive and impressive to'],
            ['key' => 'client_avatar',               'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/person-1.png')],
            ['key' => 'section_image_one',           'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/ship-1.jpg')],
            ['key' => 'section_image_two',           'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/service-sidebar.jpg')],
        ];

        foreach ($data as $item) {
            $item['type'] = Type::ABOUT_US;
            Section::create($item);
        }
    }





    public function FAQ()
    {
        Section::create([
            'type' => Type::FAQ,
            'key'  => 'title',
            'value' => 'Frequently Ask Question'
        ]);

        Section::create([
            'type' => Type::FAQ,
            'key'  => 'short_title',
            'value' => 'FAQ'
        ]);

        Section::create([
            'type'  => Type::FAQ,
            'key'   => 'faq_image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/img-9.jpg"),
        ]);

        Section::create([
            'type'  => Type::FAQ,
            'key'   => 'description',
            'value' => fake()->paragraph()
        ]);
    }

    // public function FAQStyleTwo()
    // {
    //     $data = [
    //         ['key' => 'section_tagline',           'value' => 'How We Works'],
    //         ['key' => 'section_title',             'value' => 'Journey of Your Shipment Our Proven Transport Process'],
    //         ['key' => 'description',               'value' => fake()->paragraph()],
    //         ['key' => 'label_one_value',           'value' => '900'],
    //         ['key' => 'label_one_title',           'value' => 'Project <br>Completed'],
    //         ['key' => 'label_two_value',           'value' => '820'],
    //         ['key' => 'label_two_title',           'value' => 'Delivered <br>on Time'],
    //         ['key' => 'faq_image',                  'value' => $this->uploadRepo->uploadSeederByPath('frontend/assets/img/logistics-img/img-6.jpg')]
    //     ];

    //     foreach ($data as $item) {
    //         $item['type'] = Type::FAQ_STYLE_TWO;
    //         Section::create($item);
    //     }
    // }

    public function ClientReview()
    {
        Section::create([
            'type'  =>  Type::CLIENT_REVIEW,
            'key'   =>  'short_title',
            'value' =>  'Reviews'
        ]);

        Section::create([
            'type'  =>  Type::CLIENT_REVIEW,
            'key'   =>  'title',
            'value' =>  'Client Reviews'
        ]);

        Section::create([
            'type'  =>  Type::CLIENT_REVIEW,
            'key'   =>  'description',
            'value' =>  'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Finibus Bonorum et Malorum'
        ]);
    }

    public function Blogs()
    {
        $data = [
            ['key' => 'short_title',            'value' => 'Blogs'],
            ['key' => 'title',                  'value' => 'Latest Blogs'],
            ['key' => 'short_description',      'value' => 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Finibus Bonorum et Malorum'],
        ];

        foreach ($data as $item) {
            $item['type'] = Type::BLOGS;
            Section::create($item);
        }
    }

    public function Clients()
    {
        $data = [
            ['key' => 'short_title',            'value' => 'Clients'],
            ['key' => 'title',                  'value' => 'Trusted by Our Clients'],
            ['key' => 'short_description',      'value' => 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Finibus Bonorum et Malorum'],
        ];

        foreach ($data as $item) {
            $item['type'] = Type::CLIENT_SECTION;
            Section::create($item);
        }
    }

    // public function Signin()
    // {
    //     Section::create([
    //         'type'  => Type::SIGNIN,
    //         'key'   => 'singin_image',
    //         'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/tracking-image-2.jpg"),
    //     ]);
    // }

    // public function Signup()
    // {
    //     Section::create([
    //         'type'  => Type::SIGNUP,
    //         'key'   => 'signup-image',
    //         'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/tracking-image-3.jpg"),
    //     ]);
    // }

    public function Breadcrumb()
    {
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'breadcrumb-image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/breadcrumb.jpg"),
        ]);

        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'aboutus-title',
            'value' => 'About Us'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'blog-title',
            'value' => 'Lates Blogs'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'blog-single-title',
            'value' => 'Blogs'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'service-single-title',
            'value' => 'Services'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'contactus-title',
            'value' => 'Contact Us'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'privacy-return-title',
            'value' => 'Privacy & Return'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'terms-conditions-title',
            'value' => 'Terms & Conditions'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'signin-title',
            'value' => 'Sign In'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'signup-title',
            'value' => 'Sign Up'
        ]);
        Section::create([
            'type'  => Type::BREADCRUMB,
            'key'   => 'track-title',
            'value' => 'Tracking Parcel'
        ]);
    }


    public function CTA()
    {
        Section::create([
            'type' => Type::CTA,
            'key'  => 'short_title',
            'value' => 'Sign up with ParcelFly as a merchant'
        ]);

        Section::create([
            'type' => Type::CTA,
            'key'  => 'title',
            'value' => 'Start delivering products using ParcelFly courier'
        ]);

        Section::create([
            'type' => Type::CTA,
            'key'  => 'cta-bg-image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/hero-on-bike.png"),
        ]);
    }


    public function popups_content()
    {
        $data = [
            ['key' => 'cookie_concent', 'value' => '<p class="text-muted my-2">We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking <strong>Accept</strong>, you consent to our use of cookies. Read our <a href="/privacy-return" class="text-decoration-underline" target="_blank" rel="noopener noreferrer">Privacy Policy</a> for more information.</p>'],

        ];

        foreach ($data as $item) {
            $item['type'] = Type::POPUP_CONTENT;

            Section::create($item);
        }
    }
}
