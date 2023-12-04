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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->nullable();
            $table->string("image")->nullable();
            $table->string("description")->nullable();
            $table->string("cat_id")->nullable();
            $table->boolean("is_active")->default(false);
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
