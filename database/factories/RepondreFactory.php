<?php

namespace Database\Factories;

use App\Models\Repondre;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commentaire;

class RepondreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repondre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'repondre_port_commentaire' => Commentaire::all()->random()->commentaire_port_commentaire_id,
            'repondre_port_parent' => Commentaire::all()->random()->commentaire_port_commentaire_id,
        ];
    }
}
