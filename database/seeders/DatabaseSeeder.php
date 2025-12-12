<?php

namespace Database\Seeders;

use App\Models\Payable;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $this->call([
            SupplierSeeder::class,
            CategorySeeder::class,
            CostCenterSeeder::class,
            BankAccountSeeder::class,
            PayableSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
