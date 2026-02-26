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
        Schema::create('damage_areas', function (Blueprint $table) {
            $table->id();
            $table->string('street_name');
            $table->text('address_details');
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',11,8);
            $table->foreignId('beneficiary_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damage_areas');
    }
};
