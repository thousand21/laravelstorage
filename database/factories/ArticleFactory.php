<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

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
            
            "description"=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            
            "datePublication"=>$this->faker->dateTimeThisCentury(),
            
            "auteur"=>$this->faker->firstName('male'|'female'),
            
            "image"=>$this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
