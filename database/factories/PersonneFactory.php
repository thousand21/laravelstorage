<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nom"=>$this->faker->lastName(),
            "prenom"=>$this->faker->firstName('male'|'female'),
            "age"=>$this->faker->randomBetween($min=18,$max=80),
            "email"=>$this->faker->email(),
            "mdp"=>$this->faker->password(),
            "dateNaissance"=>$this->faker->dateTimeThisCentury(),
            "photo"=>$this->faker->imageUrl($width = 640, $height = 480),
            
            "description"=>$this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
