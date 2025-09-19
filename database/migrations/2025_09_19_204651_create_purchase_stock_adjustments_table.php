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
        Schema::create('purchase_stock_adjustments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies')->nullable();
            $table->foreignId('batch_id')->constrained('medicine_batches')->nullable();
            $table->foreignId('medicine_id')->constrained('medicines');
            $table->enum('adjustment_type', ['damaged', 'expired', 'theft', 'correction', 'return']);
            $table->integer('quantity_adjusted');
            $table->text('reason')->nullable();
            $table->foreignId('adjusted_by')->constrained('users');
            $table->foreignId('approved_by')->nullable()->constrained('users');
            $table->timestamp('adjustment_date');
            $table->timestamps();
            
            $table->index(['batch_id', 'adjustment_type']);
            $table->index(['medicine_id', 'adjustment_date']);
            $table->index(['adjusted_by', 'adjustment_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_stock_adjustments');
    }
};
