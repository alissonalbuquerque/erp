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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // CREATE TABLE categories (
        //     id          INTEGER PRIMARY KEY AUTOINCREMENT,
        //     name        VARCHAR(150) NOT NULL,
        //     type        VARCHAR(50),                   -- opcional: fixo, imposto, geral
        //     created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
