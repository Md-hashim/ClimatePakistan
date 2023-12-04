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
        Schema::create('courese_items', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->nullable();
            $table->string("image")->nullable();
            $table->string("video_url")->nullable();
            $table->string("document")->nullable();
            $table->string("course_id")->nullable();
            $table->string("video")->nullable();
            $table->string("type")->nullable();
            $table->boolean("is_active")->default(true);

            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courese_items');
    }
};
