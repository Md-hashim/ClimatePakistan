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
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("tag_line")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("email_address")->nullable();
            $table->string("meta_title")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedIn")->nullable();
            $table->string("primary_color")->nullable();
            $table->string("secondary_color")->nullable();
            $table->string("text_color")->nullable();
            $table->string("logo_large")->nullable();
            $table->string("logo_small")->nullable();
            $table->string("fav_icon")->nullable();
            $table->string("banner_image")->nullable();
            $table->string("video_url")->nullable();
            $table->string("landing_page_type")->nullable();
            $table->string("announcement_image")->nullable();
            $table->boolean("announcement_status")->default(0);
            $table->boolean("announcement_url")->nullable();
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
        Schema::dropIfExists('settings');
    }
};
