<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termexams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('presentDate');
            $table->integer('termexamClassId');
            $table->integer('termexamSubjectId');
            $table->integer('termexamExamId');
            $table->integer('termexamFile');
            $table->string('termexamName',250);
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
        Schema::dropIfExists('termexams');
    }
}
