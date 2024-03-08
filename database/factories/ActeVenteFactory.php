<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActeVente>
 */
class ActeVenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NomVendeur'=>$this->faker->sentence,
            'NNIVendeur'=>$this->faker->sentence,
            'DateNaissanceVendeur'=>$this->faker->sentence,
            'NomAcheteur'=>$this->faker->sentence,
            'NNIAcheteur'=>$this->faker->sentence,
            'DateNaissanceAcheteur'=>$this->faker->sentence,
            'ChoseVendu'=>$this->faker->sentence,
            'Prix'=>$this->faker->sentence,
            'Temoin1'=>$this->faker->sentence,
            'NNITemoin1'=>$this->faker->sentence,
            'Temoin2'=>$this->faker->sentence,
            'NNITemoin2'=>$this->faker->sentence,
            'created_at'=>now(),
            'update_at'=>now(),
        ];
    }
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
