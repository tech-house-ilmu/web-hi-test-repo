<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                if (!Schema::hasColumn('articles', 'sort_order')) {
                    $table->integer('sort_order')->default(0)->after('category');
                }
                if (!Schema::hasColumn('articles', 'is_featured')) {
                    $table->boolean('is_featured')->default(false)->after('sort_order');
                }
                if (!Schema::hasColumn('articles', 'is_published')) {
                    $table->boolean('is_published')->default(true)->after('is_featured');
                }
            });
        }

        if (Schema::hasTable('events')) {
            Schema::table('events', function (Blueprint $table) {
                if (!Schema::hasColumn('events', 'sort_order')) {
                    $table->integer('sort_order')->default(0)->after('is_active');
                }
                if (!Schema::hasColumn('events', 'show_on_home')) {
                    $table->boolean('show_on_home')->default(true)->after('sort_order');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                $columns = [];
                if (Schema::hasColumn('articles', 'sort_order')) $columns[] = 'sort_order';
                if (Schema::hasColumn('articles', 'is_featured')) $columns[] = 'is_featured';
                if (Schema::hasColumn('articles', 'is_published')) $columns[] = 'is_published';
                if (!empty($columns)) $table->dropColumn($columns);
            });
        }

        if (Schema::hasTable('events')) {
            Schema::table('events', function (Blueprint $table) {
                $columns = [];
                if (Schema::hasColumn('events', 'sort_order')) $columns[] = 'sort_order';
                if (Schema::hasColumn('events', 'show_on_home')) $columns[] = 'show_on_home';
                if (!empty($columns)) $table->dropColumn($columns);
            });
        }
    }
};
