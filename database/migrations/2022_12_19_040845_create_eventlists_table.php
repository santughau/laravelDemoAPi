<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventTitle',255);
            $table->string('eventMessage',255);
            $table->string('eventcolor',255);
            $table->date('eventDate');
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
        Schema::dropIfExists('eventlists');
    }
}
