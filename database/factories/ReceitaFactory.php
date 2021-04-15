<?php

namespace Database\Factories;

use App\Models\Ingrediente;
use App\Models\Receita;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReceitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug'=> Str::slug($name),
            'urlvideo' => $this->faker->text(5),
            'body' => $this->faker->text(1000),
            'extra' => $this->faker->text(50),
            'obs' => $this->faker->text(25),
            'type' => $this->faker->randomElement(['doce','salgada']),
            'status'=> $this->faker->randomElement([1,2]),
            
            'user_id'=>User::all()->random()->id,
            

        ];
    }
}
