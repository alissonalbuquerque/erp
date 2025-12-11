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
        Schema::create('cost_centers', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('department', 150)->nullable();

            $table->timestamps();
        });

        // CREATE TABLE cost_centers (
        //     id          INTEGER PRIMARY KEY AUTOINCREMENT,
        //     name        VARCHAR(150) NOT NULL,
        //     department  VARCHAR(150),
        //     created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP
        // );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cost_centers');
    }
};
