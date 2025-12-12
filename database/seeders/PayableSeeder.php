<?php

namespace Database\Seeders;

use App\Models\Payable;
use Illuminate\Database\Seeder;

class PayableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payable::factory()->count(50)->create();
    }
}
