<?php

namespace Database\Factories;

use App\Models\Categoriajuego;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriajuegoFactory extends Factory
{
    protected $model = Categoriajuego::class;

    public function definition()
    {
        return [
			'tipo' => $this->faker->name,
			'numerojugadores' => $this->faker->name,
			'copetencia' => $this->faker->name,
			'descripcion' => $this->faker->name,
        ];
    }
}
