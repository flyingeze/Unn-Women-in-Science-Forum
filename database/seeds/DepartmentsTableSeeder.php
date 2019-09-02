<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        Department::create([
            'department_title' => "Agricultural and Bio-Resources Engineering",
        ]);
        Department::create([
            'department_title' => "Agriculture",
        ]);
        Department::create([
            'department_title' => "Animal Science",
        ]);
        Department::create([
            'department_title' => "Archaeology",
        ]);
        Department::create([
            'department_title' => "Architecture",
        ]);
        Department::create([
            'department_title' => "Biochemistry",
        ]);
        Department::create([
            'department_title' => "Biological Science",
        ]);
        Department::create([
            'department_title' => "Civil Engineering",
        ]);
        Department::create([
            'department_title' => "Computer Education",
        ]);
        Department::create([
            'department_title' => "Computer Science",
        ]);
        Department::create([
            'department_title' => "Computer with Statistics",
        ]);
        Department::create([
            'department_title' => "Crop Science",
        ]);
        Department::create([
            'department_title' => "Dentistry And Dental Surgery",
        ]);
        Department::create([
            'department_title' => "Dentistry and Dental Technology",
        ]);
        Department::create([
            'department_title' => "Education and Biology",
        ]);
        Department::create([
            'department_title' => "Education and Chemistry",
        ]);
        Department::create([
            'department_title' => "Education and Computer Science",
        ]);
        Department::create([
            'department_title' => "Education and Geography",
        ]);
        Department::create([
            'department_title' => "Education and Integrated Science",
        ]);
        Department::create([
            'department_title' => "Education and Mathematics",
        ]);
        Department::create([
            'department_title' => "Education and Physics",
        ]);
        Department::create([
            'department_title' => "Education and Science",
        ]);
        Department::create([
            'department_title' => "Electrical Engineering",
        ]);
        Department::create([
            'department_title' => "Electronics Engineering",
        ]);
        Department::create([
            'department_title' => "Food Science and Technology",
        ]);
        Department::create([
            'department_title' => "Geography",
        ]);
        Department::create([
            'department_title' => "Geology",
        ]);
        Department::create([
            'department_title' => "Health Education",
        ]);
        Department::create([
            'department_title' => "Home Science",
        ]);
        Department::create([
            'department_title' => "Industrial Technical Education",
        ]);
        Department::create([
            'department_title' => "Mechanical Engineering",
        ]);
        Department::create([
            'department_title' => "Medical Laboratory Technology / Science",
        ]);
        Department::create([
            'department_title' => "Medical Rehabilitation",
        ]);
        Department::create([
            'department_title' => "Medicine and Surgery",
        ]);
        Department::create([
            'department_title' => "Microbiology",
        ]);
        Department::create([
            'department_title' => "Nursing / Nursing Science",
        ]);
        Department::create([
            'department_title' => "Nutrition and Dietetics",
        ]);
        Department::create([
            'department_title' => "Pharmacy",
        ]);
        Department::create([
            'department_title' => "Physics",
        ]);
        Department::create([
            'department_title' => "Physics / Astrology",
        ]);
        Department::create([
            'department_title' => "Pure / Applied Chemistry",
        ]);
        Department::create([
            'department_title' => "Pure and Industrial Chemistry",
        ]);
        Department::create([
            'department_title' => "Radiography",
        ]);
        Department::create([
            'department_title' => "Soil Science",
        ]);
        Department::create([
            'department_title' => "Statistics",
        ]);
        Department::create([
            'department_title' => "Surveying And Geoinformatics",
        ]);
        Department::create([
            'department_title' => "Veterinary Medicine",
        ]);
        Department::create([
            'department_title' => "Zoology",
        ]);
    }
}