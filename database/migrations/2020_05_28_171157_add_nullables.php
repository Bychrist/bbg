<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            
            $table->integer('contactPhoneNumber')->nullable()->change();
            $table->integer('whatsappNumber')->nullable()->change();
            $table->text('biography')->nullable()->change();
            $table->string('personalImage')->nullable()->change();
            $table->string('companyName')->nullable()->change();
            $table->string('position')->nullable()->change();
            $table->string('companyWebsite')->nullable()->change();
            $table->string('companyAddress')->nullable()->change();
            $table->string('industryType')->nullable()->change();
            $table->text('companyCorporateProfile')->nullable()->change();


            
            $table->dropColumn(['passportNumber','passportExpiryDate','shortArticle']);
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
