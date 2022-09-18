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
        Schema::create('requirement_sub_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('requirement_id')->nullable();
            $table->foreign('requirement_id')->references('id')->on('requirements')->onDelete('cascade');
            $table->unsignedBigInteger('sub_service_id')->nullable();
            $table->foreign('sub_service_id')->references('id')->on('sub_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement_sub_service');
    }
};
