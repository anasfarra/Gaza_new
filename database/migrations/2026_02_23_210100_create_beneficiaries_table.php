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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('national_id', 20);
            $table->integer('family_members_count');
            $table->text('family_members_names'); // TEXT
            $table->timestamp('identification_verified_at')->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('email_verified_at', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
