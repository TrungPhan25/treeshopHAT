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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('discount')->comment('Mã giảm giá');
            $table->integer('limit_number')->comment('Giá giảm');
            $table->date('number_used')->comment('Giới hạn lượt mua');
            $table->integer('payment_limit')->comment('Ngày hết hạn');
            $table->string('description')->comment('Giá trị đơn hàng tối thiểu');
            $table->tinyInteger('status')->default(1);
            $table->foreignId('created_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('discounts');
    }
};
