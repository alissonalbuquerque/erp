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
