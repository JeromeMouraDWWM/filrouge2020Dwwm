<?php

namespace Database\Factories;

use App\Models\Commentaire;
use App\Models\Port;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commentaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commentaire_port_lieu_id' => Port::all()->random()->liste_port_lieu_id,
            'commentaire_port_commentaire' => $this->faker->paragraphs(1, true),
        ];
    }
}
