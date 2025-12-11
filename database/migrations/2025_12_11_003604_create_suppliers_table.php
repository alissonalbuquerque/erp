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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);
            $table->string('document', 20)->nullable();   // CNPJ ou CPF
            $table->string('email', 150)->nullable();
            $table->string('phone', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('bank_account', 255)->nullable(); // dados bancários simples

            $table->timestamps();
        });

        // CREATE TABLE suppliers (
        //     id              INTEGER PRIMARY KEY AUTOINCREMENT,
        //     name            VARCHAR(255) NOT NULL,
        //     document        VARCHAR(20),               -- CNPJ ou CPF
        //     email           VARCHAR(150),
        //     phone           VARCHAR(50),
        //     address         TEXT,
        //     bank_account    VARCHAR(255),              -- dados bancários simples
        //     created_at      DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at      DATETIME DEFAULT CURRENT_TIMESTAMP
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
