<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('order_tongtien');
            $table->string('order_email');
            $table->string('order_name');
            $table->integer('order_sdt');
            $table->string('order_add');
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
        Schema::dropIfExists('v_order');
    }
};
