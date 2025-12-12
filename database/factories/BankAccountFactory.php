<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_name' => $this->faker->randomElement([
                'Banco do Brasil',
                'Bradesco',
                'Itaú',
                'Caixa Econômica Federal',
                'Santander',
                'Sicredi',
                'Nubank',
                'Banco Inter',
                'BTG Pactual',
            ]),

            'agency' => $this->faker->numerify('####'),             // 4 dígitos
            'account_number' => $this->faker->numerify('######-#'), // padrão BR
            'account_type' => $this->faker->randomElement([
                'corrente',
                'poupança',
                'salário',
                'pagamento',
            ]),
        ];
    }
}
