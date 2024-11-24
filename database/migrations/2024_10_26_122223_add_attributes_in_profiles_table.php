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
        Schema::table('profiles', function (Blueprint $table) {
			$table->string('name')->nullable();
			$table->string('surname')->nullable();
			$table->string('patronymic')->nullable();
			$table->string('avatar')->nullable();
			$table->string('description')->nullable();
			$table->string('profession')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->date('birthday')->nullable();
			$table->integer('gender')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
			$table->dropColumn('name');
			$table->dropColumn('surname');
			$table->dropColumn('patronymic');
			$table->dropColumn('avatar');
			$table->dropColumn('description');
			$table->dropColumn('profession');
			$table->dropColumn('address');
			$table->dropColumn('phone');
			$table->dropColumn('birthday');
			$table->dropColumn('gender');
        });
    }
};
