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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_user');
            $table->integer('status');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            'role_user' => 'SuperUser',
            'status' => 1,
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
    );
    
    DB::table('roles')->insert([
            'role_user' => 'Administrator',
            'status' => 1,
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
    );
    
    DB::table('roles')->insert([
            'role_user' => 'UserViews',
            'status' => 1,
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
    );

    Schema::create('user_roles', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user');
        $table->unsignedBigInteger('id_role');
        $table->timestamps();
        
        $table->foreign('id_user')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');

        $table->foreign('id_role')
        ->references('id')
        ->on('roles')
        ->onDelete('cascade');
    });

    DB::table('user_roles')->insert([
            'id_user' => 1,
            'id_role' => 1,
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
        Schema::dropIfExists('roleuser');
    }
};
