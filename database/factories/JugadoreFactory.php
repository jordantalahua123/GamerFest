<?php

namespace Database\Factories;

use App\Models\Jugadore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JugadoreFactory extends Factory
{
    protected $model = Jugadore::class;

    public function definition()
    {
        return [
			'equipos_id' => $this->faker->name,
			'nombre' => $this->faker->name,
			'cedula' => $this->faker->name,
			'telefono' => $this->faker->name,
			'correo' => $this->faker->name,
        ];
    }
}
