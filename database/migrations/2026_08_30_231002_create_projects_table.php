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

            // Project Information
            $table->string('title');
            $table->string('slug')->unique();

            // Project Details
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('Ongoing');

            // Project Parties
            $table->string('consultant')->nullable();
            $table->string('main_contractor')->nullable();
            $table->string('subcontractor')->nullable();

            // Project Area
            $table->decimal('bua', 12, 2)->nullable();

            // Description
            $table->longText('description')->nullable();

            // Main Image
            $table->string('main_image')->nullable();

            // Featured Project
            $table->boolean('featured')->default(false);

            // Display Order
            $table->integer('sort_order')->default(0);

            // Project Dates
            $table->date('start_date')->nullable();
            $table->date('completion_date')->nullable();

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