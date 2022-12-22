<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profileInstituteName',250);
            $table->string('profileAddressOne',250);
            $table->string('profileAddressTwo',250);
            $table->string('profileTaluka',250);
            $table->string('profileDistri',250);
            $table->integer('profileMobile');
            $table->string('profileEmail',250);
            $table->string('profileBankName',250);
            $table->integer('profileAccNo');
            $table->string('profileIfsc',250);
            $table->string('profileSlogan',250);
            $table->string('profileWebsite',250);
            $table->string('profileLogo',250);
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
        Schema::dropIfExists('profiles');
    }
}
