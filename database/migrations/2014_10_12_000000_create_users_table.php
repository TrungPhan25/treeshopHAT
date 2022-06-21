<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->foreignId('role')->constrained('user_groups');
            $table->tinyInteger('gender');
            $table->string('phone', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('img')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('status')->default(1);
            $table
                ->foreignId('created_by')
                ->nullable()
                ->constrained('users');
            $table
                ->foreignId('updated_by')
                ->nullable()
                ->constrained('users');
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'huy2001@gmail.com',
            'username' => 'HuyHs',
            'role' => 1,
            'gender' => 1,
            'password' => bcrypt('Huy12345'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
