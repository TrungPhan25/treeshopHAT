<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableCustomer extends Migration
{

    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });
    }


    public function down()
    {

    }
}
