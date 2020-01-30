<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    # 2018_01_19_033321_create_uploader_table
    public function up()
    {
    Schema::create('uploaders', function (Blueprint $table) {
    $table->increments('id');
    $table->string('username')->comment('名前');
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
    Schema::drop('uploaders');
    }
}
