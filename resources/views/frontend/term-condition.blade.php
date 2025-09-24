@extends('frontend.master')
@section('title', 'term-condition')
@section('Maincontent')
  <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Terms & Conditions</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->

    <section class=" py-15">
        <div class="container mx-auto max-w-[1224px] bg-white px-4 sm:px-6">
            <!-- Page Title -->
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Terms & Conditions</h1>

            <!-- Intro -->
            <p class="text-gray-600 mb-6">
                By accessing and using this website, you agree to the following terms and conditions:
            </p>

            <!-- Terms List -->
            <ol class="list-decimal list-inside space-y-4 text-gray-700 leading-relaxed">
                <li>
                    <span class="font-semibold">Account Responsibility:</span>
                    Users are responsible for maintaining the confidentiality of their account credentials.
                </li>
                <li>
                    <span class="font-semibold">Prohibited Use:</span>
                    You agree not to use this service for unlawful or unauthorized purposes.
                </li>
                <li>
                    <span class="font-semibold">Content Ownership:</span>
                    All materials, including text and graphics, are the intellectual property of the company.
                </li>
                <li>
                    <span class="font-semibold">Service Availability:</span>
                    We do not guarantee uninterrupted or error-free operation of the service.
                </li>
                <li>
                    <span class="font-semibold">Privacy Policy:</span>
                    By using this service, you also agree to our Privacy Policy regarding data usage.
                </li>
                <li>
                    <span class="font-semibold">Termination:</span>
                    We reserve the right to terminate accounts that violate these terms without notice.
                </li>
                <li>
                    <span class="font-semibold">Limitation of Liability:</span>
                    The company is not responsible for damages arising from the use of this website.
                </li>
                <li>
                    <span class="font-semibold">Changes to Terms:</span>
                    These terms may be updated at any time, and continued use implies acceptance.
                </li>
            </ol>

            <!-- Footer Note -->
            <p class="text-gray-600 mt-10">
                If you have any questions about these Terms & Conditions, please contact us.
            </p>
        </div>
    </section>

@endsection
