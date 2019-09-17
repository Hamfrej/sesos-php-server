<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lesson_id')->nullable();
            $table->unsignedInteger('classroom_id')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            $table->timestamps();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('SET NULL');
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_lists');
    }
}
