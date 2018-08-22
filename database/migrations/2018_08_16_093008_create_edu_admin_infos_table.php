<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEduAdminInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_admin_infos', function (Blueprint $table) {
            $table->increments('student_id')->unique();
            $table->string('name');
            $table->string('class')->default('计算机科学学院');
            $table->string('secondary_college');
            $table->string('teacher');
            $table->string('teacher_tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edu_admin_infos');
    }
}
