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
            $table->foreign('compani_id')->references('id')->on('companies');
            $table->foreign('type__contract_id')->references('id')->on('type__contractes');
            $table->foreign('type__vacation_id')->references('id')->on('type__vacations');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->text('description')->nullable(true);
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
