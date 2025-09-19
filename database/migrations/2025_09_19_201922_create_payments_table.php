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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('organization_id')->nullable();
            $table->foreignId('invoice_number')->constrained('sales');
            $table->decimal('amount', 12, 2);
            $table->enum('payment_method', ['cash', 'mobile_money', 'insurance', 'card']);
            $table->string('payment_reference')->nullable();
            $table->string('mobile_money_number')->nullable();
            $table->string('insurance_claim_number')->nullable();
            $table->enum('payment_status', ['completed', 'pending', 'failed'])->default('completed');
            $table->foreignId('processed_by')->constrained('users');
            $table->timestamp('payment_date');
            $table->timestamps();

            $table->index(['payment_method', 'payment_date']);
            $table->index(['processed_by', 'payment_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
