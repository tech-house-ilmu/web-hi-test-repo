<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('home_heroes')) {
            Schema::create('home_heroes', function (Blueprint $table) {
                $table->id();
                $table->string('headline')->default('Learn, Grow, and Get Achievement Together');
                $table->text('subtitle')->nullable();
                $table->string('cta_text')->default('Jelajahi Semua Program');
                $table->string('cta_link')->default('/programme/HI-programmes');
                $table->json('slides')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('home_impacts')) {
            Schema::create('home_impacts', function (Blueprint $table) {
                $table->id();
                $table->string('tag')->nullable();
                $table->string('value'); // e.g. 65+, 20.000+
                $table->string('label'); // e.g. Program, Peserta
                $table->integer('sort_order')->default(0);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('home_heroes');
        Schema::dropIfExists('home_impacts');
    }
};
