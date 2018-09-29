<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kennel_id');
            $table->string('name');
            $table->string('breed');
            $table->string('color');
            $table->datetime('birthday');
            $table->text('about')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->text('avatar');
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
        Schema::dropIfExists('sires');
    }
}
