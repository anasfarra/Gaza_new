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
        Schema::create('compensation_requests', function (Blueprint $table) {
            $table->id();

           $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->foreignId('damage_report_id')->nullable()->constrained('damage_reports')->onDelete('set null');
            $table->foreignId('admin_id')->constrained('admins')->onDelete('restrict'); // Assuming 'admins_id' maps to 'admin_id' for better convention

            $table->string('request_number', 50)->unique();
            $table->enum('request_type', ['cash', 'material', 'labor', 'mixed']);

            $table->decimal('requested_amount', 12, 2)->nullable();
            $table->decimal('approved_amount', 12, 2)->nullable();

            $table->enum('status', ['pending', 'under_review', 'approved', 'rejected', 'completed'])->default('pending');
            $table->text('rejection_reason')->nullable();

            $table->timestamp('submitted_at')->useCurrent();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();

             $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compensation_requests');
    }
};
