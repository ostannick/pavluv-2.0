<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('breed_name');
            $table->string('weight_m_lo');
            $table->string('weight_m_hi');
            $table->string('weight_f_lo');
            $table->string('weight_f_hi');
            $table->string('height_m_lo');
            $table->string('height_m_hi');
            $table->string('height_f_lo');
            $table->string('height_f_hi');
            $table->decimal('weight_av', 11, 2);
            $table->string('groom_stat');
            $table->string('shed_stat');
            $table->string('energy_stat');
            $table->string('trainability_stat');
            $table->string('temperament_stat');
            $table->boolean('isSporting');
            $table->boolean('isWorking');
            $table->boolean('isFamily');
            $table->boolean('isCompanion');
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
        Schema::dropIfExists('breeds');
    }
}
