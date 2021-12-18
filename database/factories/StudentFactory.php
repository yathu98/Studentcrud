<?php

namespace Database\Factories;
use App\Models\student;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'fname'=>$this->faker->firstNameMale ,
            'lname'=>$this->faker->lastName  ,
        ];
    }
}
