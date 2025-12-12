<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{   
    protected $model = Supplier::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $names = [
            'Alpha Trade Supplies Ltda.',
            'GlobalTech Distribuidora',
            'NovaPrime Importações',
            'Mercury Logistics & Supply',
            'BrightSource Comercial',
            'EcoLine Fornecimentos',
            'BlueBridge Partners',
            'SupraMax Distribuidora',
            'Vertex Industrial Solutions',
            'GreenWave Comércio e Serviços',
        ];

        return [
            'name'         => $this->faker->unique()->randomElement($names),
            'document'     => $this->faker->numerify('###########'),  // CPF fake (11 números)
            'email'        => $this->faker->safeEmail(),
            'phone'        => $this->faker->phoneNumber(),
            'address'      => $this->faker->address(),
            'bank_account' => 'Banco: '.$this->faker->word().' - Agência: '.$this->faker->numerify('####').' - Conta: '.$this->faker->numerify('######'),
        ];
    }
}
