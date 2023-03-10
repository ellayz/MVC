<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebbaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webbase', function (Blueprint $table) {
            $table->string('Firstname');
            $table->string('Lastname' );
            $table->string('Birthday');
            $table->string('Gender');
            $table->string('Email');
            $table->string('PhoneNumber');
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
        Schema::dropIfExists('webbase');
    }
}
