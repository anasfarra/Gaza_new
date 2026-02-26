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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('slug');
            $table->text('description');
            $table->foreignId('damage_report_id')->constrained()->onDelete('cascade');
            $table->foreignId('beneficiary_id')->constrained()->onDelete('cascade');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->enum('project_type', ['housing', 'infrastructure', 'commercial', 'educational', 'healthcare']);
            $table->enum('status', ['planning', 'approved', 'ongoing', 'paused', 'completed', 'cancelled']);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('progress_precentage');
            $table->decimal('total_budget',12,2);
            $table->decimal('spent_amount',12,2);
             $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
