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
        Schema::table('sales', function (Blueprint $table) {
            $table->foreignId('prescription_id')->nullable()->constrained('prescriptions');
            $table->enum('sale_type', ['none', 'prescription', 'otc', 'diagnostic'])->default('none');
            $table->text('notes')->nullable();
            
            $table->index(['sale_type', 'sale_date']);
        });

    }

};
