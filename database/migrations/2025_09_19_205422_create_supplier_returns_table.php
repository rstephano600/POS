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
        Schema::create('supplier_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies')->nullable();
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->foreignId('batch_id')->constrained('medicine_batches');
            $table->integer('quantity_returned');
            $table->decimal('return_amount', 10, 2);
            $table->text('reason');
            $table->string('return_number')->unique();
            $table->enum('status', ['pending', 'approved', 'completed'])->default('pending');
            $table->foreignId('processed_by')->constrained('users');
            $table->timestamp('return_date');
            $table->timestamps();
            
            $table->index(['supplier_id', 'status']);
            $table->index(['processed_by', 'return_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_returns');
    }
};
