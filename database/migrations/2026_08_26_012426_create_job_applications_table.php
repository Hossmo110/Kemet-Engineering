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
        Schema::create('job_applications', function (Blueprint $table) {

            $table->id();

            // Job
            $table->foreignId('career_job_id')
                ->constrained('career_jobs')
                ->cascadeOnDelete();

            // Applicant Information
            $table->string('name');
            $table->string('email');
            $table->string('phone');

            // Cover Letter
            $table->longText('cover_letter')->nullable();

            // CV File
            $table->string('cv')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
