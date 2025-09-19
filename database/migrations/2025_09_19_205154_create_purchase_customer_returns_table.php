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
        Schema::create('customer_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies')->nullable();
            $table->string('invoice_number')->unique();
            $table->foreignId('sale_item_id')->constrained('sale_items');
            $table->foreignId('batch_id')->constrained('medicine_batches');
            $table->integer('quantity_returned');
            $table->decimal('refund_amount', 10, 2);
            $table->text('reason');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('processed_by')->constrained('users');
            $table->foreignId('approved_by')->nullable()->constrained('users');
            $table->timestamp('return_date');
            $table->timestamps();
            
            $table->index(['processed_by', 'return_date']);
            $table->index(['status', 'return_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_returns');
    }
};
