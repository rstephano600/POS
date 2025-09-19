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
        Schema::create('medicine_batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies');
            $table->foreignId('medicine_id')->constrained('medicines');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->string('batch_number');
            $table->date('expiry_date');
            $table->date('manufacture_date')->nullable();
            $table->integer('quantity_received');
            $table->integer('quantity_available');
            $table->decimal('cost_price', 10, 2);
            $table->decimal('selling_price', 10, 2);
            $table->date('received_date');
            $table->foreignId('received_by')->constrained('users');
            $table->boolean('is_expired')->default(false);
            $table->timestamps();
            
            $table->unique(['medicine_id', 'batch_number', 'supplier_id']);
            $table->index(['expiry_date', 'is_expired']);
            $table->index(['medicine_id', 'quantity_available']);
            $table->index(['supplier_id', 'received_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_batches');
    }
};
