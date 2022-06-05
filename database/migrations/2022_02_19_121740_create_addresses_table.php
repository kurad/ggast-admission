<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')
                    ->references('id')
                    ->on('provinces')
                    ->onDelete('cascade');
            $table->string('district_name');
        });

        Schema::create('sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')
                    ->references('id')
                    ->on('districts')
                    ->onDelete('cascade');
            $table->string('sector_name');
        });

        Schema::create('cells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')
                    ->references('id')
                    ->on('sectors')
                    ->onDelete('cascade');
            $table->string('cell_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('sectors');
        Schema::dropIfExists('cells');
    }
}
