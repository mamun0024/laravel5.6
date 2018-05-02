<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrllinkdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urllinkdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('url_id');
            $table->string('pTitle', 255);
            $table->string('pImg', 255);
            $table->text('pDesc');
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
        Schema::dropIfExists('urllinkdatas');
    }
}
