<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PagoFactory extends Factory
{
    protected $model = Pago::class;

    public function definition()
    {
        return [
			'titularpago' => $this->faker->name,
			'comprobante' => $this->faker->name,
			'monto' => $this->faker->name,
			'fecha' => $this->faker->name,
        ];
    }
}
