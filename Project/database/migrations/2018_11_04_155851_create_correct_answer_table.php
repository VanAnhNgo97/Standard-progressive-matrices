<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_answer', function (Blueprint $table) {
            $table->unsignedInteger('quiz_id');
            $table->unsignedInteger('answer_id');
            $table->primary(['quiz_id','answer_id']);
            $table->foreign('quiz_id')->references('id')->on('quiz');
            $table->foreign('answer_id')->references('id')->on('answer');
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
        Schema::dropIfExists('correct_answer');
    }
}
