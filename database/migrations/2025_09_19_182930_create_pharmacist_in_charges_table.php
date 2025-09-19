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
        Schema::create('pharmacist_in_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pharmacy_id')->constrained('pharmacies');
            $table->string('license_number')->nullable();
            $table->date('license_expiry')->nullable();
            $table->date('appointment_date')->nullable();
            $table->boolean('is_current')->default(true);
            $table->timestamps();
            
            $table->unique(['pharmacy_id', 'is_current']);
            $table->index(['user_id', 'is_current']);
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacist_in_charges');
    }
};
