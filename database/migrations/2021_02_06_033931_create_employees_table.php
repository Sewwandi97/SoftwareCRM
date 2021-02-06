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
            $table->bigIncrements('EmpID');
            $table->string('Name');
            $table->string('User_Name');
            $table->string('Password');
            $table->string('Email');
            $table->string('MobileNo');
            $table->string('Address');
            $table->string('EmpType');
            $table->string('Status');
            $table->string('Added_By');
            $table->unsignedBigInteger('RoleID');
            $table->foreign('RoleID')->references('RoleID')->on('roles');
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
        Schema::dropIfExists('employees');
    }
}
