<?php

namespace Database\Factories;

use App\Models\Ecrire;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Commentaire;

class EcrireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ecrire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ecrire_port_user' => User::all()->random()->user_port_id,
            'ecrire_port_commentaire' => Commentaire::all()->random()->commentaire_port_commentaire_id,
        ];
    }
}
