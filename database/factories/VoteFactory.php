<?php

namespace Database\Factories;

use App\Models\Vote;
use App\Models\Port;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vote_port_value' => $this->faker->numberBetween(1, 5),
            'vote_port_user' => User::all()->random()->user_port_id,
            'vote_port_location' => Port::all()->random()->liste_port_lieu_id,
        ];
    }
}
