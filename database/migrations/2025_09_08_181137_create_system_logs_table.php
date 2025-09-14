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
        Schema::create('system_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained();
            $table->unsignedBigInteger('user_id')->nullable(); // who did the action
            $table->string('action'); // create, update, delete, login, logout, etc
            $table->string('model')->nullable(); // which model/table
            $table->unsignedBigInteger('model_id')->nullable(); // which record
            $table->text('description')->nullable(); // details of action
            $table->ipAddress('ip_address')->nullable(); // where request came from
            $table->string('user_agent')->nullable(); // browser/device info
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_logs');
    }
};
