<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse', function (Blueprint $table) {
            $table->integer('mana_id')->unsigned()->nullable()->change();
            $table->foreign('mana_id')->references('id')->on('management');

            $table->integer('staff_id')->unsigned()->nullable()->change();
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse_add');
    }
}
