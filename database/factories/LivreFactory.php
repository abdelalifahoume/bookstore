<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=>$this->faker->realText(10),
            'description'=>$this->faker->realText(200),
            'urlphoto'=>$this->faker->realText(67),
            'categorie_id'=>$this->faker->numberBetween(1,100),
            'auteur_id'=>$this->faker->numberBetween(1,100),
        ];
    }
}
