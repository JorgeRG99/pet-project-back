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
        Schema::create('pets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('active')->default(true);
            $table->string('name');
            $table->integer('age');
            $table->string('weight');
            $table->string('gender');
            $table->string('additional_info');
            $table->date('date_entry');

            $table->uuid('breed_id');

            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
