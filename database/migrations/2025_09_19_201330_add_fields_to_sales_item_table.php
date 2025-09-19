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
        Schema::table('sale_items', function (Blueprint $table) {
            $table->foreignId('medicine_id')->constrained('medicines')->nullable();
            $table->foreignId('batch_id')->constrained('medicine_batches')->nullable();
            $table->decimal('discount_amount', 10, 2)->default(0);

            $table->index(['medicine_id']);
            $table->index(['batch_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sale_items', function (Blueprint $table) {
            //
        });
    }
};
