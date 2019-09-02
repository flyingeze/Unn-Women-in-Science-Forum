<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'cat_title' => "Health Science",
            'cat_slug' => "health-science",
        ]);

        Category::create([
            'cat_title' => "Physical Science",
            'cat_slug' => "physical-science",
        ]);

        Category::create([
            'cat_title' => "Engineering",
            'cat_slug' => "engineering",
        ]);

        Category::create([
            'cat_title' => "Technology",
            'cat_slug' => "technology",
        ]);

        Category::create([
            'cat_title' => "Chemistry",
            'cat_slug' => "chemistry",
        ]);

        Category::create([
            'cat_title' => "Physics",
            'cat_slug' => "physics",
        ]);

        Category::create([
            'cat_title' => "Biology",
            'cat_slug' => "biology",
        ]);

        Category::create([
            'cat_title' => "Geography",
            'cat_slug' => "geography",
        ]);

        Category::create([
            'cat_title' => "Mathematics",
            'cat_slug' => "mathematics",
        ]);
    }
}
