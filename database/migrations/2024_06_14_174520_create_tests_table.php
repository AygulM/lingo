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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('lang_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('teacher_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('lesson_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('student_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
           
            $table->integer('question_count')->nullable();
            $table->integer('time_limit')->nullable();
            $table->date('end_date')->nullable();

            $table->foreignId('test_type_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('hometasks', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->foreignId('lesson_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('teacher_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('student_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
           
            $table->date('end_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
        Schema::dropIfExists('hometasks');
    }
};
