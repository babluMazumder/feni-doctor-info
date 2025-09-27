<?php

namespace Modules\SocialLink\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\SocialLink\Entities\SocialLink;
use Faker\Factory as Faker;

class SocialLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $names = ['Facebook', 'Twitter', 'Instagram', 'Youtube'];
        $icons = ['icon-facebook', 'icon-twitter', 'icon-instagram', 'icon-youtube'];
         $links  = [
            'https://facebook.com',
            'https://twitter.com',
            'https://instagram.com',
            'https://youtube.com'
        ];

        for ($i = 0; $i <= 3; $i++) {

            $socialLink           = new SocialLink();
            $socialLink->name     = $names[$i];
            $socialLink->icon     = $icons[$i];
            $socialLink->link     = $links[$i];
            $socialLink->position = $i;
            $socialLink->save();
        }

        // $this->call("OthersTableSeeder");
    }
}
