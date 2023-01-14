<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        return [
			'Nombre' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'fecha' => $this->faker->name,
        ];
    }
}
