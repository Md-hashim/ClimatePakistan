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
        Schema::create('about_tdaps', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("banner_image");
            $table->text("page_title");
            $table->text("meta_title");
            $table->text("meta_description");
            $table->text("section_1_title");
            $table->text("section_1_content");
            $table->string("section_1_image");
            $table->text("section_2_title");
            $table->text("section_2_content");
            $table->string("section_2_image");
            $table->text("section_3_title");
            $table->text("section_3_content");
            $table->string("section_3_image");
            $table->text("section_4_title");
            $table->text("section_4_content");
            $table->string("section_4_image");
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
        Schema::dropIfExists('about_tdaps');
    }
};
