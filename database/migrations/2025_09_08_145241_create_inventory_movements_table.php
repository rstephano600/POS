<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
    {
        Schema::create('inventory_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained(); // Who made the movement
            $table->enum('type', ['purchase', 'sale', 'adjustment', 'return']);
            $table->integer('quantity_change'); // Positive for incoming, negative for outgoing
            $table->integer('quantity_before');
            $table->integer('quantity_after');
            $table->string('reference_number')->nullable(); // Sale ID, Purchase Order, etc.
            $table->text('notes')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            
            $table->index(['organization_id', 'product_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};
