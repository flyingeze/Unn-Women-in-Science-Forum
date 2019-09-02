<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::create([
            'title' => "UNN Women In Science Forum",
            'url' => "http://myproject.com",
            'email' => "admin@myproject.com",
            'telephone' => "+2348038831882",
            'address' => "3334 Radford Street Louisville, Victoria Melbourne, Australia",
            'about' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eius, nesciunt animi qui quaerat aliquam corrupti beatae, veniam excepturi maxime quas rerum asperiores dolore aliquid atque? Aperiam neque ex fugiat?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eius, nesciunt animi qui quaerat aliquam corrupti beatae, veniam excepturi maxime quas rerum asperiores dolore aliquid atque? Aperiam neque ex fugiat?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dicta fugiat voluptatibus aperiam officia quis asperiores animi error distinctio corporis, doloribus aliquam libero maiores modi dolores perspiciatis beatae nulla, eaque?</p>",
            'why_us' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  esse cillum dolore eu fugiat nulla pariatur.</p>",
            'info' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry's statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.</p>",
            'banner_text' => "Connect, Share &amp; Engage. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum aspernatur repudiandae praesentium, accusantium quo eaque porro ut at corporis, ipsa omnis vero minima aliquam nulla, eos dolorem provident, deserunt asperiores!",
            'banner1' => "women-in-science.jpg",
            'banner2' => "university-of-nigeria-nsukka.jpg",
            'banner3' => "women-in-science-group.jpg",
            'image1' => "unn.png",
            'image2' => "university-of-nigeria-nsukka.jpg",
            'image3' => "UNN-logo.png",
            'by' => "Eze Paul Chidiebere",
        ]);
    }
}
