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
        Schema::table('articles', function (Blueprint $table) {
            $table->timestamp('date_added')->nullable();
            $table->string('writer_name');
            $table->string('writer_specialty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('date_added')->nullable();
            $table->dropColumn('writer_name');
            $table->dropColumn('writer_specialty');
        });
    }
};
