<?php

namespace Database\Factories;

use App\Models\Inscripcionidv;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscripcionidvFactory extends Factory
{
    protected $model = Inscripcionidv::class;

    public function definition()
    {
        return [
			'jugadores_id' => $this->faker->name,
			'videojuegos_id' => $this->faker->name,
			'pagos_id' => $this->faker->name,
			'numerojuegos' => $this->faker->name,
			'observaciones' => $this->faker->name,
        ];
    }
}
