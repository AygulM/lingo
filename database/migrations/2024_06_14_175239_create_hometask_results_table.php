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
        Schema::create('hometask_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hometask_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('student_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('solution')->nullable();
            $table->string('path_solution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hometask_results');
    }
};
