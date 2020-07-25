<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisementes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('compani_id')->unsigned();
            $table->integer('type__contract_id')->unsigned();
            $table->integer('type__vacation_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->text('description');
            $table->string('vacation');
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
        Schema::dropIfExists('advertisementes');
    }
}
