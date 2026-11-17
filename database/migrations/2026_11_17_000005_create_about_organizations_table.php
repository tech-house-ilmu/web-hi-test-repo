<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('about_organizations')) {
            Schema::create('about_organizations', function (Blueprint $table) {
                $table->id();
                $table->string('hero_title')->default('Better Career for Better Future');
                $table->text('hero_subtitle')->nullable();
                $table->text('vision')->nullable();
                $table->json('missions')->nullable();
                $table->string('core_value_title')->default('Edusociopreneur');
                $table->string('our_value_title')->default('Learn, Grow, and Get Achievement Together');
                $table->string('culture_title')->default('DEALS');
                $table->json('culture_items')->nullable();
                $table->longText('founder_story')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('about_organizations');
    }
};
