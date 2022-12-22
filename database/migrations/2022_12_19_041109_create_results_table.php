<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('resultStudentId');
            $table->integer('resultBatchId');
            $table->integer('resultClassId');
            $table->integer('resultExamId');
            $table->integer('resultSubjectId');
            $table->integer('resultTotalMarks');
            $table->integer('resultObtainMarks');
            $table->date('resultDate');
            $table->string('status',100);
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
        Schema::dropIfExists('results');
    }
}
