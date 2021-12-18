<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fname',50);
            $table->string('lname',50);
         $table->string('gender',50);
           // $table->string('grade_name',50);
           $table->integer('grade_id')->nullable();
          $table->integer('phone_id')->nullable();
        // $table->integer('subject_id')->nullable();
           $table->string('address',200);
       //   $table->string('subject_name',200);
          $table->date('birthday');
           $table->string('email',50);
            $table->string('phone',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
