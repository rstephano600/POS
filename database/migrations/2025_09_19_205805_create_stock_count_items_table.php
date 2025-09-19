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
        Schema::create('stock_count_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies')->nullable();
            $table->foreignId('stock_count_id')->constrained('stock_counts');
            $table->foreignId('batch_id')->constrained('medicine_batches');
            $table->integer('system_quantity');
            $table->integer('physical_quantity');
            $table->integer('variance'); // physical_quantity - system_quantity
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index(['stock_count_id']);
            $table->index(['batch_id']);
            $table->index(['variance']); // For reporting discrepancies
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_count_items');
    }
};
