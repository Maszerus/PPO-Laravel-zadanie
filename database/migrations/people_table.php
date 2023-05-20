<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('Street');
            $table->string('Postcode');
            $table->string('City');
            $table->string('Country');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
}
