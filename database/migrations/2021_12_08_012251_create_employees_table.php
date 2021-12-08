<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('birthday');
            $table->string('sex');
            $table->string('phone');
            $table->string('cmnd');
            $table->string('email');
            $table->string('address');
            $table->unsignedInteger('manage_id');
            $table->timestamps();
            $table->foreign('manage_id')->references('id')->on('manages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
