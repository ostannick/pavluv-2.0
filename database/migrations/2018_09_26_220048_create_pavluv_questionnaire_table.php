<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavluvQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavluv_questionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question');
            $table->boolean('required')->default(true);
            $table->string('placeholder')->default('');
            $table->text('input_type')->nullable();
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
        Schema::dropIfExists('pavluv_questionnaires');
    }
}
