<?php

namespace Database\Seeders;

use App\Models\Payments;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payments::factory()->count(50)->create();
    }
}
