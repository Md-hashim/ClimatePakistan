<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("city")->nullable();;
            $table->string("images")->nullable();
            $table->string("video_url")->nullable();
            $table->string("story")->nullable();
            $table->string("video_title")->nullable();
            $table->string("video_description")->nullable();
            $table->boolean("is_active")->default(false);
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
        Schema::dropIfExists('success_stories');
    }
};
