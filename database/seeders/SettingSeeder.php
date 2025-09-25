<?php

namespace Database\Seeders;

use App\Models\Upload;
use App\Enums\Status;
use App\Models\Backend\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Repositories\Upload\UploadInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    private $uploadRepo;

    public function __construct(UploadInterface $uploadRepo)
    {
        $this->uploadRepo = $uploadRepo;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = collect($this->settings());
        $settings->each(fn ($setting) => Setting::create($setting));
    }

    private function settings(): array
    {
        return [

            ['key' => 'name',                   'value' => 'Doctor Info'],
            ['key' => 'phone',                  'value' => '+8802999888'],
            ['key' => 'email',                  'value' => 'info@doctorinfo.com'],
            ['key' => 'opening_hours',                  'value' => '24/7 hours open'],
            ['key' => 'opening_days',                  'value' => 'monday-friday'],
            ['key' => 'address',                  'value' => 'Address:4th floor, Feni Center, Feni-3900, Bangladesh'],
            ['key' => 'paginate_value',                  'value' => '10'],
            ['key' => 'copyright',              'value' => 'All rights reserved. Development by Doctor info Developers.'],

            ['key' => 'light_logo',               'value' => $this->uploadRepo->uploadSeederByPath("backend/assets/img/logo/logo-light.png")],
            ['key' => 'dark_logo',          'value' => $this->uploadRepo->uploadSeederByPath("backend/assets/img/logo/logo-dark.png")],
            ['key' => 'favicon',            'value' => $this->uploadRepo->uploadSeederByPath("backend/assets/img/logo/logo-light.png")],


            ['key' => 'sendmail_path',          'value' => '/usr/sbin/sendmail -bs -i'],
            ['key' => 'mail_driver',            'value' => 'smtp'],
            ['key' => 'mail_host',              'value' => 'sandbox.smtp.mailtrap.io'],
            ['key' => 'mail_port',              'value' => '2525'],
            ['key' => 'mail_username',          'value' => 'd9f98a444876e4'],
            ['key' => 'mail_password',          'value' => 'ad457b5e0ad2cd'],
            ['key' => 'mail_encryption',        'value' => 'tls'],
            ['key' => 'mail_address',           'value' => 'admin@example.com'],
            ['key' => 'mail_name',              'value' => 'Example Name'],
            ['key' => 'signature',              'value' => 'Example Signature'],


            ['key' => 'facebook_client_id',     'value' => '456479846546456456'],
            ['key' => 'facebook_client_secret', 'value' => '45d4fsd454dgd465g4'],
            ['key' => 'facebook_status',        'value' => Status::ACTIVE],

            ['key' => 'google_client_id',       'value' => '73uou5.dg54df.google-user-content.com'],
            ['key' => 'google_client_secret',   'value' => 'gdg4d5g4fg5d4g6d4g546'],
            ['key' => 'google_status',          'value' => Status::ACTIVE],

        ];
    }
}
