<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "author_id"=> random_int(1,100),
            "title"=> $this->faker->title,
            "ISBN"=>$this->faker->postcode,
            "pub_year"=> random_int(1800,2020),
            "available"=> random_int(10,50)
        ];
    }
}
