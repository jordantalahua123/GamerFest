<?php

namespace Database\Factories;

use App\Models\Inscripciongrp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscripciongrpFactory extends Factory
{
    protected $model = Inscripciongrp::class;

    public function definition()
    {
        return [
			'equipos_id' => $this->faker->name,
			'videojuegos_id' => $this->faker->name,
			'pagos_id' => $this->faker->name,
			'numerojuegos' => $this->faker->name,
			'observaciones' => $this->faker->name,
        ];
    }
}
