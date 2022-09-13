<?php

namespace Database\Factories;

use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name(),
            'nationalite'=>$this->faker->randomElement(array("maroc","france","espagne")),
            'urlphoto'=>$this->faker->realText(67),
        ];
    }
}
