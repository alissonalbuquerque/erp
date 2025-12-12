<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'Serviços Gerais',
            'Manutenção',
            'Marketing',
            'Impostos Federais',
            'Impostos Estaduais',
            'Custos Fixos',
            'Materiais de Escritório',
            'Transporte',
            'Alimentação',
            'Tecnologia',
        ];

        $types = ['fixo', 'imposto', 'geral'];

        return [
            'name' => $this->faker->unique()->randomElement($names),
            'type' => $this->faker->randomElement($types),
        ];
    }
}
