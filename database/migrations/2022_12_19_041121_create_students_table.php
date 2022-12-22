<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('studentClass');
            $table->integer('studentBatch');
            $table->integer('studentMobile');
            $table->integer('studentFee');
            $table->date('studentDob');
            $table->string('studentName',255);
            $table->string('studentAddress',255);
            $table->string('studentMedium',255);
            $table->string('studentGender',255);
            $table->string('studentEmail',255);
            $table->string('studentSchool',255);
            $table->string('studentPasswor',255);
            $table->string('studentMac',255);
            $table->string('studentSubject',255);
            $table->string('studentImage',255);
            $table->string('studentStatus',255);
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
        Schema::dropIfExists('students');
    }
}
