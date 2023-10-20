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
        Schema::create('project_gallery_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_gallery_id')->nullable();
            $table->foreign('project_gallery_id')->references('id')->on("project_galleries")->onDelete('cascade'); 
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on("tags")->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_gallery_tags');
    }
};
