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
        Schema::create('vp_details_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('vp_details_img')->nullable();
            $table->string('vp_details_name')->nullable();
            $table->string('vp_details_position')->nullable();
            $table->string('vp_details_linkedin')->nullable();
            $table->string('vp_details_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vp_details_abouts');
    }
};
