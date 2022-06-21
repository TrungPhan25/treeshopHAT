<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableSlidersUrl extends Migration
{
    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->string('url');
        });
    }


    public function down()
    {
        //
    }

}
