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
        Schema::create('admin_repositories', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->nullable();
            $table->string("file")->nullable();
            $table->uuid("cat_id")->nullable();
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('repository_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_repositories');
    }
};
