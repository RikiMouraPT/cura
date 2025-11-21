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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('phone')->nullable();
            $table->text('profile_photo')->nullable();
            $table->enum('user_type', ['patient', 'companion', 'medical_assistant', 'nurse', 'doctor']);
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('social_security_number')->nullable();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
