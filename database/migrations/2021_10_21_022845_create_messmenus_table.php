<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messmenus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mess_id');
            $table->string('Sunday');
            $table->string('Monday');
            $table->string('Tuesday');
            $table->string('Wednesday');
            $table->string('Thurday');
            $table->string('Friday');
            $table->string('Saturday');
            $table->foreign('mess_id')->references('id')->on('messes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messmenus');
    }
}
