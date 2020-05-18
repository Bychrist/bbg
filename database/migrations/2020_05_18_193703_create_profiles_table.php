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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('passportNumber');
            $table->string('passportExpiryDate');
            $table->integer('contactPhoneNumber');
            $table->integer('whatsappNumber');
            $table->text('biography');
            $table->string('personalImage');
            $table->string('companyName');
            $table->string('position');
            $table->string('companyWebsite');
            $table->string('companyAddress');
            $table->string('industryType');
            $table->text('companyCorporateProfile');
            $table->text('shortArticle');
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
        $table->foreign('user_id')->references('id')->on('users');
    }
}
