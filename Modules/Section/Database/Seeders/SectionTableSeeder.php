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
        $this->category();
        $this->doctor();
        $this->privacyReturnPolicy();
        $this->termsConditions();



        $this->popups_content();
    }


    public function doctor(){
        Section::create([
            'type'  => Type::DOCTOR,
            'key'   => 'doctor_title',
            'value' => 'Doctors'
        ]);
        Section::create([
            'type'  => Type::DOCTOR,
            'key'   => 'doctor_sub_title',
            'value' => 'Our Specialized Doctors'
        ]);
    }

    public function privacyReturnPolicy(){
          Section::create([
            'type'  => Type::PRIVACY_RETURN_POLICY,
           'key' => 'privacy_return_policy_title',                                     'value' => 'Return Policy',
            'key' => 'privacy_return_policy_description',                               'value' => '30-Day Return: You can return any product within 30 days of receiving it for a full refund or exchange. <br> <p style="text-align: justify;">We strive to ensure our customers are satisfied with their purchases. If you are not completely happy with your product, you may request a return within 7–14 days of delivery. To be eligible, the item must be unused, in original packaging, and accompanied by proof of purchase. Once we receive and inspect the returned item, we will notify you of the refund status. Approved refunds will be processed to your original payment method within 5–10 business days. Please note that return shipping costs are non-refundable unless the product was defective or incorrectly shipped. Digital goods, sale items, and personalized products are generally non-returnable. For return requests, please contact our support team.</p>'
        ]);
    }

    public function termsConditions(){
          Section::create([
            'type'  => Type::TERMS_AND_CONDITION,
           'key' => 'terms_conditions_title',                                     'value' => 'Terms & Conditions',
           'key' => 'description',                               'value' => '<p style="text-align: justify;">Welcome to our website. By accessing or using our services, you agree to be bound by the following Terms & Conditions. Please read them carefully. If you do not agree with any part of these terms, you must not use this website.</p><h3 style="margin-top: 25px;">1. Acceptance of Terms</h3><p style="text-align: justify;">By accessing this website, you acknowledge that you have read, understood, and agree to comply with these Terms & Conditions, our Privacy Policy, and all applicable laws and regulations.</p><h3 style="margin-top: 25px;">2. Use of the Website</h3><p style="text-align: justify;">You agree to use the website for lawful purposes only. You must not use the site in a way that may cause damage to the website or impair its availability or accessibility. You also agree not to use the site for fraudulent or unlawful activities.</p><h3 style="margin-top: 25px;">3. Intellectual Property</h3><p style="text-align: justify;">All content on this site, including text, graphics, logos, and software, is the property of the company or its content suppliers and is protected by applicable intellectual property laws. You may not copy, reproduce, or distribute any part of the site without written permission.</p><h3 style="margin-top: 25px;">4. User Content</h3><p style="text-align: justify;">Any content you submit to the website (comments, feedback, etc.) must not be unlawful or infringe on any third-party rights. By submitting content, you grant us a non-exclusive, royalty-free license to use, reproduce, and display such content.</p><h3 style="margin-top: 25px;">5. Limitations of Liability</h3><p style="text-align: justify;">We do not guarantee that the website will be free from errors or uninterrupted. We are not liable for any direct, indirect, incidental, or consequential damages arising from your use of the website.</p><h3 style="margin-top: 25px;">6. Third-Party Links</h3><p style="text-align: justify;">Our website may contain links to third-party websites. We are not responsible for the content or practices of these external sites and encourage you to review their terms and policies before engaging.</p><h3 style="margin-top: 25px;">7. Changes to Terms</h3><p style="text-align: justify;">We reserve the right to modify these Terms & Conditions at any time without prior notice. It is your responsibility to review this page periodically. Continued use of the site constitutes acceptance of the updated terms.</p><h3 style="margin-top: 25px;">8. Governing Law</h3><p style="text-align: justify;">These terms are governed by and construed in accordance with the laws of your jurisdiction. Any disputes arising under these terms will be subject to the exclusive jurisdiction of the courts in that jurisdiction.</p><p style="text-align: justify; margin-top: 30px; font-style: italic;">If you have any questions regarding these Terms & Conditions, please contact us before continuing to use our services.</p>'
          ]);
    }


    public function category()
    {
        Section::create([
            'type'  => Type::CATEGORY,
            'key'   => 'category_title',
            'value' => 'Disease Categories'
        ]);
        Section::create([
            'type'  => Type::CATEGORY,
            'key'   => 'category_sub_title',
            'value' => 'Our Specialized Disease Categories'
        ]);
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
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nulla quibusdam architecto, error exercitationem a?'
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
        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'opening_hours',
            'value' => 'Mon - Fri: 9:00 AM - 6:00 PM'
        ]);
        Section::create([
            'type'  => Type::CONTACT_US,
            'key'   => 'opening_days',
            'value' => 'Saturday - Closed'
        ]);
        // Section::create([
        //     'type'  => Type::CONTACT_US,
        //     'key'   => 'Breadcrumb_image',
        //     'value' => $this->uploadRepo->uploadSeederByPath("frontend/assets/img/logistics-img/breadcrumb-img-4.jpg")
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
            ['key' => 'section_tagline',             'value' => 'ABOUT '],
            ['key' => 'section_main_title',          'value' => 'Affordable Health Care Solutions'],
            ['key' => 'years_of_experience',     'value' => '25+'],
            ['key' => 'happay_customers',     'value' => '15k'],
            ['key' => 'positive_reviews',     'value' => '12k'],


            ['key' => 'promotional_red_text',        'value' => 'Redefining Beauty with Mediax™ is the captivating and inclusive title that invites visitors to explore the unique story and missions of Mediax. This title suggests a commitment to not only providing'],
            ['key' => 'primary_button_text',         'value' => 'about More'],
            ['key' => 'primary_button_link',          'value' => 'https://bugbuild.com/'],
            ['key' => 'video_url',          'value' => 'https://www.youtube.com/embed/dEo9mZc65Bc'],

            ['key' => 'section_description',         'value' => 'Arki features minimal and stylish design. The theme is well crafted for all the modern architect and interior design website. With Arki, it makes your website look even more attractive and impressive to'],
            ['key' => 'video_image',               'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/img-11.jpg')],
            ['key' => 'about_us_image',           'value' =>  $this->uploadRepo->uploadSeederByPath('uploads/seeders/section/img-5.jpg')],

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
            'key'   =>  'client_title',
            'value' =>  'Testimonial'
        ]);

        Section::create([
            'type'  =>  Type::CLIENT_REVIEW,
            'key'   =>  'client_sub_title',
            'value' =>  'What Our Present Says?'
        ]);

    }

    public function Blogs()
    {
        $data = [
            ['key' => 'short_title',            'value' => 'Blogs'],
            ['key' => 'title',                  'value' => 'News & Blogs'],

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
            'key'   => 'breadcrumb_image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/testimonial.jpg"),
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
            'value' => 'We’re welcoming new patients and  can’t wait to meet you!'
        ]);

        Section::create([
            'type' => Type::CTA,
            'key'  => 'title',
            'value' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam cum voluptas fuga
                        doloremque
                        eos, voluptates dolor. In, ratione quas distinctio temporibus quidem id obcaecati, molestiae,
                        laboriosam accusantium deleniti illum.'
        ]);
        Section::create([
            'type' => Type::CTA,
            'key'  => 'button_one',
            'value' => 'Book Appointment'
        ]);
        Section::create([
            'type' => Type::CTA,
            'key'  => 'button_one_link',
            'value' => 'https://bugbuild.com/'
        ]);

        Section::create([
            'type' => Type::CTA,
            'key'  => 'button_two',
            'value' => 'Get Free Consulting '
        ]);
        Section::create([
            'type' => Type::CTA,
            'key'  => 'button_two_link',
            'value' => 'https://bugbuild.com/'
        ]);

        Section::create([
            'type' => Type::CTA,
            'key'  => 'cta_image',
            'value' => $this->uploadRepo->uploadSeederByPath("uploads/seeders/section/cta-img-2.png"),
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
