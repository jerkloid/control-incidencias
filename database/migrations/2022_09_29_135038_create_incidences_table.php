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
        Schema::create('incidences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('type');
            $table->string('priority');
            $table->string('imgUrl');
            $table->longText('content');
            $table->longText('solution')->default('pending');
            $table->longText('emailDetail');
            $table->unsignedBigInteger('user_id')->default('1');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidences');
    }
};
