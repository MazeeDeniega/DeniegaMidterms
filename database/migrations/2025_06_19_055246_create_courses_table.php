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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->comment('name of subject. ')->max(50);
            $table->string('course_code')->comment('course code. ')->max(10);
            $table->integer('credits')->comment('credits of the subject. ');
            $table->string('description')->nullable()->comment('name of subject. ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
