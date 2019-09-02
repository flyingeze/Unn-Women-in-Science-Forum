<?php

use Illuminate\Database\Seeder;
use App\FAQ;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ::truncate();
        
        FAQ::create([
            'faq_question' => "What this Forums all about?",
            'faq_answer' => "The UNN Women in Science Forums is designed to provide answers to your science problems and issues.",
        ]);
        FAQ::create([
            'faq_question' => "Who answers questions on the Forum?",
            'faq_answer' => "Registered members answer all the questions on the UNN Women in Science Forums.",
        ]);
        FAQ::create([
            'faq_question' => "Where do I get support from this Forum?",
            'faq_answer' => "The official way to contact our support team is through the contact page",
        ]);
    }
}
