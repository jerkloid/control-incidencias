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
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incidence_id');
            $table->longText('content');
            $table->string('imgUrl');
            $table->longText('status')->default('1');
            $table->unsignedBigInteger('user_id')->default('1');
            $table->longText('emailDetail')->nullable();
            $table->timestamps();

            $table->foreign('incidence_id')->references('id')->on('incidences')->onDelete('cascade');
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
        Schema::dropIfExists('solutions');
    }
};
