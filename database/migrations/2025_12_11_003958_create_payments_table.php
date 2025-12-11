<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // CREATE TABLE payments (
        //     id                  INTEGER PRIMARY KEY AUTOINCREMENT,
        //     payable_id          INTEGER NOT NULL,
        //     bank_account_id     INTEGER,
            
        //     payment_date        DATE NOT NULL,
        //     amount_paid         DECIMAL(12,2) NOT NULL,
        //     payment_method      VARCHAR(50),        -- PIX, boleto, transferência, cartão...
        //     transaction_ref     VARCHAR(150),
        //     notes               TEXT,
            
        //     created_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
            
        //     FOREIGN KEY (payable_id) REFERENCES payables(id),
        //     FOREIGN KEY (bank_account_id) REFERENCES bank_accounts(id)
        // );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
