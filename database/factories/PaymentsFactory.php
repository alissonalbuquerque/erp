<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payments>
 */
class PaymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Foreign Keys
            'payable_id' => \App\Models\Payable::factory(),

            'bank_account_id' => $this->faker->boolean(70)   // 70% de chance de ter conta bancária
                ? \App\Models\BankAccount::factory()
                : null,

            // Dados do pagamento
            'payment_date' => $this->faker->date(),
            'amount_paid'  => $this->faker->randomFloat(2, 50, 5000),

            'payment_method' => $this->faker->randomElement([
                'PIX',
                'Boleto',
                'Transferência',
                'Cartão Crédito',
                'Cartão Débito',
                'Dinheiro',
            ]),

            'transaction_ref' => $this->faker->boolean(80)
                ? strtoupper($this->faker->bothify('TRX-#####-????'))
                : null,

            'notes' => $this->faker->sentence(12),
        ];
    }

}
