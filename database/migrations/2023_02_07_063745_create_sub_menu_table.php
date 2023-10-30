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
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu');
            $table->string('name');
            $table->integer('status');
            $table->timestamps();

            
            $table->foreign('id_menu')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');
        });

        DB::table('sub_menu')->insert([
            'id_menu' => 1,
            'name' => 'JDIH',
            'status' => 1,
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );

        DB::table('sub_menu')->insert([
            'id_menu' => 1,
            'name' => 'Twitter',
            'status' => 1,
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
        Schema::dropIfExists('sub_menu');
    }
};
