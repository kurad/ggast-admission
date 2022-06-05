<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolAttendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school__attendeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned()->nullable();
            $table->foreign('applicant_id')
                    ->references('id')
                    ->on('applicants')
                    ->onDelete('cascade');
            $table->string('indexNo')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('schoolname')->nullable();
            $table->string('school_principal')->nullable();
            $table->string('principal_phone')->nullable();
            $table->decimal('fees',0,0)->nullable();
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
        Schema::dropIfExists('school__attendeds');
    }
}
