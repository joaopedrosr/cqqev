<?php

namespace Database\Factories;

use App\Models\Ingrediente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IngredienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingrediente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        $name = $this->faker->unique()->word(10);

        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            
            

        ];
    }
}
