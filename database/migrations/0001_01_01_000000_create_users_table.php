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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // Ensure roles and countries tables exist or are created before users if enforcing foreign keys
            // Since users table is created first by default timestamp, we might need to make these nullable and add constraints later
            // OR the user should reorder migrations. Assuming standard Laravel flow where constraints are added if table exists.
            // However, to be safe with standard timestamps, we'll define columns. 
            // The prompt asks for role_id, country_id, actor_id logic.
            
            $table->unsignedBigInteger('role_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            
            $table->unsignedBigInteger('actor_id')->nullable();
            $table->string('actor_type')->nullable();

            $table->rememberToken();
            $table->timestamps();

            // We add foreign keys indexes but maybe not constraints if tables don't exist yet
            $table->index('role_id');
            $table->index('country_id');
            $table->index(['actor_id', 'actor_type']);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};