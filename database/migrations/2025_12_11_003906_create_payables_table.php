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
            
            // Foreign Keys
            $table->foreignId('supplier_id')
                ->constrained('suppliers')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            $table->foreignId('cost_center_id')
                ->nullable()
                ->constrained('cost_centers')
                ->nullOnDelete();

            // Dados principais
            $table->string('description', 255);
            $table->string('document_number', 50)->nullable();

            $table->decimal('amount_original', 12, 2);
            $table->decimal('amount_current', 12, 2);

            // Datas
            $table->date('issue_date')->nullable();
            $table->date('due_date');
            $table->date('payment_date')->nullable();

            // Status e observação
            $table->string('status', 20)->default('open');
            $table->text('notes')->nullable();
            
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
