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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 150);
            $table->string('last_name', 300);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dni', 9)->unique();
            $table->string('phone', 9);
            $table->boolean('active')->default(true);
            $table->date('birth_date');
            $table->enum('role', [ 'worker', 'user' ])->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
