<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSibblingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sibblings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')
                    ->references('id')
                    ->on('applicants')
                    ->onDelete('cascade');
            $table->string('fullname');
            $table->string('sex');
            $table->date('dob');
            $table->string('school_attended')->nullable();
            $table->string('sibbling_at_gashora')->nullable();
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
        Schema::dropIfExists('sibblings');
    }
}
