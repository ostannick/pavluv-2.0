<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPricingColumnsToPuppiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puppies', function (Blueprint $table) {
            $table->decimal('breeder_price', 11, 2)->default(2000.00);
            $table->decimal('breeder_deposit', 11, 2)->default(1000.00);
            $table->decimal('pavluv_price', 11, 2)->default(2167.50);
            $table->decimal('pavluv_keeps', 11, 2)->default(167.50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('puppies', function (Blueprint $table) {
            $table->dropColumn('breeder_price');
            $table->dropColumn('pavluv_price');
            $table->dropColumn('pavluv_keeps');
        });
    }
}
