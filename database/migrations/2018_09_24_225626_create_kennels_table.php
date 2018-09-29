<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKennelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kennels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('My Kennel Name');
            $table->integer('user_id');
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->string('postal');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->text('about')->nullable();
            $table->string('breed_one')->nullable();
            $table->string('breed_two')->nullable();
            $table->string('breed_three')->nullable();
            $table->string('opens')->default('10:00 AM');
            $table->string('closes')->default('6:00 PM');
            $table->decimal('latitude')->nullable();
            $table->decimal('longitude')->nullable();
            $table->decimal('rating_cache')->default(0.00);
            $table->boolean('does_microchip')->default(false);
            $table->boolean('does_dogfood')->default(false);
            $table->boolean('does_rabiesvaccine')->default(false);
            $table->boolean('does_deworm')->default(false);
            $table->boolean('does_dhpp')->default(false);
            $table->boolean('does_annum_health')->default(false);
            $table->boolean('does_register')->default(false);
            $table->boolean('does_lineage')->default(false);
            $table->boolean('does_rehome')->default(false);
            $table->boolean('does_insurance')->default(false);
            $table->boolean('does_shipping')->default(false);
            $table->boolean('accept_waitlist_apps')->default(true);
            $table->boolean('address_privacy')->default(true);
            $table->datetime('upcoming')->nullable();
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
        Schema::dropIfExists('kennels');
    }
}
