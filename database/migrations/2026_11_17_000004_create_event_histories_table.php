<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('event_histories')) {
            Schema::create('event_histories', function (Blueprint $table) {
                $table->id();
                $table->string('slug')->unique();
                $table->string('title');
                $table->string('category')->default('Event Collaboration');
                $table->text('excerpt')->nullable();
                $table->string('poster')->nullable();
                $table->json('gallery')->nullable();
                $table->longText('description')->nullable();
                $table->string('speaker')->nullable();
                $table->string('profession')->nullable();
                $table->string('date')->nullable();
                $table->string('time')->nullable();
                $table->string('location')->nullable();
                $table->string('collaborator')->nullable();
                $table->json('goals')->nullable();
                $table->longText('agenda')->nullable();
                $table->longText('outcomes')->nullable();
                $table->longText('conclusion')->nullable();
                $table->longText('closing')->nullable();
                $table->integer('sort_order')->default(0);
                $table->boolean('is_published')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('event_histories');
    }
};
