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
        Schema::create('galleries', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->nullable();
            $table->string("description")->nullable();
            $table->string("image")->nullable();
            $table->string("cat_id");
            $table->boolean("is_active")->default(true);
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('gallery_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};
