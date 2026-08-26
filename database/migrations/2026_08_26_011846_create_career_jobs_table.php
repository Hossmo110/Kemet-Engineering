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
        Schema::create('career_jobs', function (Blueprint $table) {

            $table->id();

            // Basic Job Information
            $table->string('title');
            $table->string('location');
            $table->string('department');
            $table->string('type');

            // Job Content
            $table->text('description');

            // Job Details
            $table->longText('responsibilities')->nullable();
            $table->longText('qualifications')->nullable();

            // Job Dates
            $table->date('posted_at')->nullable();
            $table->date('expires_at')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_jobs');
    }
};
