<?php

namespace Database\Factories;
use app\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name= $this->faker->unique()->sentence(20);
      //  $name = $this->faker->unique()->sentence(6); // Puedes ajustar el número de palabras si es necesario
        // Resto de tu código...
        return [
            'name' => $name,
            'slug' => str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(2500),
            'status' => $this->faker->randomElement([1,2]),
             'category_id' => category::all()->random()->id,
             'user_id' => User::all()->random()->id,
        ];
    }
}
