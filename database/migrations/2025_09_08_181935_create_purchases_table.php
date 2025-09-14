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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->string('purchase_invoice_no');
            $table->integer('supplier_id');
            $table->float('sub_total');
            $table->float('discount')->nullable();
            $table->float('grand_total');
            $table->enum('payment_status', ['completed', 'pending', 'cancelled'])->default('completed');
            $table->foreignId('payment_method_id')->consttained()->nullable();
            $table->float('payment_amount');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();

            $table->index(['organization_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
