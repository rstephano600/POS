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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained('pharmacies');
            $table->string('name');
            $table->string('generic_name')->nullable();
            $table->string('brand_name')->nullable();
            $table->foreignId('category_id')->constrained('medicine_categories');
            $table->string('strength')->nullable();
            $table->enum('form', ['tablet', 'capsule', 'syrup', 'injection', 'cream', 'drops', 'other']);
            $table->enum('prescription_type', ['prescription', 'otc']);
            $table->enum('storage_type', ['shelf', 'cold_chain', 'controlled']);
            $table->string('barcode')->nullable()->unique();
            $table->decimal('unit_price', 10, 2);
            $table->integer('reorder_level')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['category_id', 'is_active']);
            $table->index(['prescription_type', 'is_active']);
            $table->index(['storage_type']);
            $table->fullText(['name', 'generic_name', 'brand_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
