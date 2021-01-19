<?php

namespace Database\Factories;

use App\Models\Port;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Port::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*'liste_port_lieu' => $this->faker->unique()->name,
            'liste_port_label_pp' => $this->faker->numberBetween(0, 2),
            'liste_port_label_aeb' => $this->faker->numberBetween(0, 2),
            'liste_port_label_pb' => $this->faker->numberBetween(0, 1),
            'liste_port_localisation' => $this->faker->city,
            'liste_port_carte' => $this->faker->url,*/
        ];
    }
}
