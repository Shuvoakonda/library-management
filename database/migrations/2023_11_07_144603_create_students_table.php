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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('students_name');
            $table->integer('students_id');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('gender');
            $table->string('religion');
            $table->string('department');
            $table->string('session');
            $table->string('student_image');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
