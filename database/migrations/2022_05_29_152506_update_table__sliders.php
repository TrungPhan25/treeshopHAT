<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableSliders extends Migration
{

    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->integer('sort_by');
        });
    }


    public function down()
    {
        //
    }
}
