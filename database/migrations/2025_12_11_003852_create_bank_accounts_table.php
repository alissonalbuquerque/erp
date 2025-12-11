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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();

            $table->string('bank_name', 150);
            $table->string('agency', 20)->nullable();
            $table->string('account_number', 30)->nullable();
            $table->string('account_type', 30)->nullable(); // corrente, poupança, etc
            
            $table->timestamps();
        });

        // CREATE TABLE bank_accounts (
        //     id              INTEGER PRIMARY KEY AUTOINCREMENT,
        //     bank_name       VARCHAR(150) NOT NULL,
        //     agency          VARCHAR(20),
        //     account_number  VARCHAR(30),
        //     account_type    VARCHAR(30),              -- corrente, poupança, carteira virtual...
        //     created_at      DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at      DATETIME DEFAULT CURRENT_TIMESTAMP
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
