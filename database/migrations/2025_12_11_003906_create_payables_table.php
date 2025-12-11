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
        Schema::create('payables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // CREATE TABLE payables (
        //     id                  INTEGER PRIMARY KEY AUTOINCREMENT,
        //     supplier_id         INTEGER NOT NULL,
        //     category_id         INTEGER,
        //     cost_center_id      INTEGER,
            
        //     description         VARCHAR(255) NOT NULL,
        //     document_number     VARCHAR(50),          -- número da nota ou fatura
        //     amount_original     DECIMAL(12,2) NOT NULL,
        //     amount_current      DECIMAL(12,2) NOT NULL,
            
        //     issue_date          DATE,
        //     due_date            DATE NOT NULL,
        //     payment_date        DATE,                 -- null se não pago
            
        //     status              VARCHAR(20) DEFAULT 'open',
        //     notes               TEXT,
            
        //     created_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
        //     updated_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
            
        //     FOREIGN KEY (supplier_id) REFERENCES suppliers(id),
        //     FOREIGN KEY (category_id) REFERENCES categories(id),
        //     FOREIGN KEY (cost_center_id) REFERENCES cost_centers(id)
        // );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payables');
    }
};
