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
        Schema::create('chamber_registrations', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("chamber_name")->nullable();
            $table->string("email")->nullable();
            $table->string("registration_number")->nullable();
            $table->string("business_address")->nullable();

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
        Schema::dropIfExists('chamber_registrations');
    }
};
