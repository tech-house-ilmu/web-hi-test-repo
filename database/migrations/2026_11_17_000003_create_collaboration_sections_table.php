<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('collaboration_documentations')) {
            Schema::create('collaboration_documentations', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('image');
                $table->string('collaboration_type')->default('all'); // all, community, affiliate, event, media_partner
                $table->integer('sort_order')->default(0);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('collaboration_partners')) {
            Schema::create('collaboration_partners', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('logo');
                $table->string('url')->nullable();
                $table->integer('sort_order')->default(0);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('collaboration_types')) {
            Schema::create('collaboration_types', function (Blueprint $table) {
                $table->id();
                $table->string('slug')->unique(); // community, affiliate, event, media_partner
                $table->string('title');
                $table->text('description')->nullable();
                $table->text('for_who')->nullable();
                $table->json('process')->nullable();
                $table->json('activities')->nullable();
                $table->json('benefits')->nullable();
                $table->text('example')->nullable();
                $table->string('cta_title')->default('MARI MENCIPTAKAN DAMPAK BERMAKNA BERSAMA');
                $table->string('cta_text')->default('Mari Berkolaborasi');
                $table->string('cta_link')->default('https://bit.ly/PartnershipHouseilmu');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('collaboration_documentations');
        Schema::dropIfExists('collaboration_partners');
        Schema::dropIfExists('collaboration_types');
    }
};
