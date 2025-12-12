<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payable>
 */
class PayableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Gera valores coerentes
        $amountOriginal = $this->faker->randomFloat(2, 50, 5000);
        $amountCurrent  = $this->faker->randomFloat(2, 0, $amountOriginal);

        // Datas coerentes: emissão ≤ vencimento ≤ pagamento
        $issueDate  = $this->faker->dateTimeBetween('-10 days', 'now');
        $dueDate    = $this->faker->dateTimeBetween('now', '+5 days');

        // Pagamento pode existir ou não (status muda automaticamente)
        $isPaid = $this->faker->boolean(40); // 40% pagos
        $paymentDate = $this->faker->dateTimeBetween($issueDate, $dueDate);

        return [
            'supplier_id'    => \App\Models\Supplier::inRandomOrder()->value('id'),
            'category_id'    => \App\Models\Category::inRandomOrder()->value('id'),
            'cost_center_id' => \App\Models\CostCenter::inRandomOrder()->value('id'),

            'description'      => $this->faker->sentence(4),
            'document_number'  => $this->faker->numerify('DOC-#####'),

            'amount_original' => $amountOriginal,
            'amount_current'  => $amountCurrent,

            'issue_date'   => $issueDate,
            'due_date'     => $dueDate,
            'payment_date' => $paymentDate,

            'status' => $isPaid ? 'paid' : 'open',

            'notes' => $this->faker->sentence(10),
        ];
    }
}
