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
        Schema::create('entreprnure_registrations', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("full_name")->nullable();
            $table->string("email")->nullable();
            $table->string("cnic")->nullable();
            $table->string("business_name")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("education")->nullable();
            $table->string("other_education")->nullable();
            $table->string("business_type")->nullable();
            $table->string("product_categories")->nullable();
            $table->string("trainings")->nullable();
            $table->string("target_market")->nullable();
            $table->string("language")->nullable();
            $table->string("other_language")->nullable();
            $table->string("address")->nullable();
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
        Schema::dropIfExists('entreprnure_registrations');
    }
};
