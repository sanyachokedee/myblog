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
            $table->increments('id'); //int(10) แต่ถ้าเป็น id = 20 หลัก
            $table->string('fullname',128);
            $table->string('gender',10);
            $table->string('email',64)->unique();
            $table->string('tel','24');
            $table->integer('age');
            $table->text('address');
            $table->string('avatar',128);
            $table->integer('status');
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
