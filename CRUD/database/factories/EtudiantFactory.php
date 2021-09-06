<?php

namespace Database\Factories;

use App\Models\etudiant;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'age'=>$this->faker->internetExplorer(),
            'classe_id'=>rand(1,7),
        ];
    }
}
