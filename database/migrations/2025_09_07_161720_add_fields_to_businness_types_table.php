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
        Schema::table('business_types', function (Blueprint $table) {
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->after('is_active');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade')->after('created_by');
        });
        Schema::table('organizations', function (Blueprint $table) {
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->after('is_active');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade')->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('businness_types', function (Blueprint $table) {
            //
        });
    }
};
