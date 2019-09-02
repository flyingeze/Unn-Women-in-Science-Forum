<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'name' => "Member Staff",
            'reg_no' => "193861",
            'phone_number' => "0800000001",
            'email' => "staff1@unn.edu.ng",
            'type' => "Staff",
            'password' => bcrypt('password'),
            'department'=> "Computer Science",
            'age'=> "18 to 25",
            'address'=>"UNN",
            'role' => "member",
        ]);

        User::create([
            'name' => "Member Student",
            'email' => "student1@unn.edu.ng",
            'password' => bcrypt('password'),
            'reg_no' => "193862",
            'phone_number' => "0800000002",
            'department'=> "Computer Science",
            'age'=> "18 to 25",
            'address'=>"UNN",
            'type' => "Student",
            'role' => "member",
        ]);
        
        User::create([
            'name' => "Admin Staff",
            'reg_no' => "193863",
            'phone_number' => "0800000003",
            'email' => "admin@unn.edu.ng",
            'department'=> "",
            'type' => "Staff",
            'password' => bcrypt('password'),
            'role' => "admin",
            'department'=> "Computer Science",
            'age'=> "18 to 25",
            'address'=>"UNN",
        ]);
    }
}
