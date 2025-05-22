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
        Schema::create('manhours', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('company_category')->nullable();
            $table->string('company')->nullable();
            $table->string('department')->nullable();
            $table->string('dept_group')->nullable();
            $table->string('job_class')->nullable();
            $table->float('manhours')->nullable();
            $table->integer('manpower')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manhours');
    }
};
