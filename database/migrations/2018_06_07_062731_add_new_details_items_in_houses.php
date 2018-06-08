<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewDetailsItemsInHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            //
            $table->string('kvadratura')->nullable();
            $table->string('uchastok')->nullable();
            $table->string('visota_potolka')->nullable();
            $table->string('visota_potolka_gostinaya')->nullable();
            $table->string('spalnie_comnati')->nullable();
            $table->string('vannie_comnati')->nullable();
            $table->string('terrasa')->nullable();
            $table->string('parking')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            //
            $table->dropColumn(['kvadratura, uchastok, visota_potolka, visota_potolka_gostinaya, spalnie_comnati, vannie_comnati, terrasa, parking']);
        });
    }
}
