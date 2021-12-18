<?php

namespace Database\Seeders;
use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fname =student::factory()->count(500)->create();
        $lname =student::factory()->count(500)->create();
    }
}
