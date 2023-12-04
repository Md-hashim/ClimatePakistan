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
        Schema::create('events', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->nullable();
            $table->dateTime("date")->nullable();
            $table->dateTime("start_time")->nullable();
            $table->dateTime("end_time")->nullable();;
            $table->string("image")->nullable();
            $table->string("type")->nullable();
            $table->string("description")->nullable();
            $table->boolean("is_active")->default(true);
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
        Schema::dropIfExists('events');
    }
};
