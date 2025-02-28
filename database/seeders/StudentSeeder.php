<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $students = collect([
    //         [
    //           'name'=>'Rahul Durgapal',
    //           'email'=>'rahul@gmail.com'
    //         ],
    //         [
    //              'name'=>'Arjun Tripathi',
    //             'email'=>'arjun@gmail.com'
    //         ],
    //         [
    //            'name'=>'Aman Yadav',
    //       'email'=>'aman@gmail.com'
    //         ]
    //         ]);

    //    $students->each(function($student) {
    //      student::insert($student);
    //    });
        

        

        $json = File::get(path:'database/json/students.json');

        $students = collect(json_decode($json));

           $students->each(function($student) {
            student::create([
             'name'=> $student->name,
             'email'=>$student->email
        ]);
       });

    // for($i=0;$i<=10;$i++){
    // student::create([
    //     'name'=> fake()->name(),
    //     'email'=>fake()->unique()->email()
    // ]);
}

    }
}
