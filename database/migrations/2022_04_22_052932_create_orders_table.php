<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->bigInteger('total')->default(0);
            $table->bigInteger('shipping_cost')->default(0);
            $table->bigInteger('coupon')->default(0);
            $table->foreignId('district_id')->constrained();
            $table->string('detailed_address');
            $table->foreignId('order_status_id')->constrained();
            $table->tinyInteger('status')->default(1);
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('orders');
    }
};
