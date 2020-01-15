<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stu_id')->unsigned();
            $table->foreign('stu_id')
            ->references('id')
            ->on('sudents')
            ->onDelete('cascade');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');
            
            
            $table->string('obt_marks');
            
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
        Schema::dropIfExists('exams');
    }
}
