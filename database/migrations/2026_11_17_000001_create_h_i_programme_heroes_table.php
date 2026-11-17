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
        Schema::create('h_i_programme_heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->default('Program Daring');
            $table->string('badge')->nullable();
            $table->string('image')->nullable();
            $table->text('desc')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_i_programme_heroes');
    }
};
