<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->date('dob')->nullable();
            $table->integer('cell_id')->unsigned()->nullable();
            $table->foreign('cell_id')
                    ->references('id')
                    ->on('cells')
                    ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->string('mothername')->nullable();
            $table->boolean('malive')->nullable();
            $table->boolean('mlive_together')->nullable();
            $table->string('mphone')->nullable();
            $table->string('memail')->nullable();
            $table->string('mprofession')->nullable();
            $table->string('memployer')->nullable();
            $table->string('fathername')->nullable();
            $table->boolean('falive')->nullable();
            $table->boolean('flive_together')->nullable();
            $table->string('fphone')->nullable();
            $table->string('femail')->nullable();
            $table->string('fprofession')->nullable();
            $table->string('femployer')->nullable();
            
            $table->string('guardianname')->nullable();
            //$table->boolean('falive');
            $table->boolean('glive_together')->nullable();
            $table->string('gphone')->nullable();
            $table->string('gemail')->nullable();
            //$table->string('fprofession');
            //$table->string('femployer');
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
        Schema::dropIfExists('applicants');
    }
}
