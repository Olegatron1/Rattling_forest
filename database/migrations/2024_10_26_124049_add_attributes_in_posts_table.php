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
        Schema::table('posts', function (Blueprint $table) {
			$table->string('title');
			$table->string('content');
			$table->string('description');
			$table->integer('views')->default(0);
			$table->unsignedSmallInteger('status')->default(1);
			$table->date('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
			$table->dropColumn(['title', 'content', 'description', 'views', 'status', 'published_at']);
        });
    }
};
