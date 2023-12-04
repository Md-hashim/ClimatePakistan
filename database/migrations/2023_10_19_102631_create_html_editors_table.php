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
        Schema::create('html_editors', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('page_title',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->string('meta_tag',255)->nullable();
            $table->string('meta_description')->nullable();
            $table->string('html')->nullable();
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
        Schema::dropIfExists('html_editors');
    }
};
