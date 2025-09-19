<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('license_number')->unique()->nullable();
            $table->text('country');
            $table->text('region');
            $table->text('district');
            $table->text('location');
            $table->string('working_hours')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->date('license_expiry')->nullable();
            $table->string('profile_photo')->default('default_pharmacy_photo.png');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['is_active', 'license_expiry']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
};
