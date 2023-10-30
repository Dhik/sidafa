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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
        });

       DB::table('users')->insert([
            'name' => 'Super Admin',
            'gender' => 1,
            'email' => 'admin@superuser.id',
            'password' => bcrypt('Admin123'),
            'status' => 1,
            'remember_token' => bcrypt('Admin123'),
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
    );
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
