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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('business_license_number', 50)->nullable();
            $table->string('registration_number', 50)->nullable();
            $table->integer('products_count')->default(0);
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->enum('verification_status', ['unverified','verified','trusted'])->default('unverified');
            $table->timestamp('verified_at')->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
