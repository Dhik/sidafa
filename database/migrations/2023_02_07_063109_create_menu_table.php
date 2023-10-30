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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icons');
            $table->integer('status');
            $table->timestamps();
        });

        DB::table('menu')->insert([
            'name' => 'LKPP',
            'icons' => 'coins',
            'status' => '1',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );

        DB::table('menu')->insert([
            'name' => 'Perhutani',
            'icons' => 'graph',
            'status' => '1',
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
        Schema::dropIfExists('menu');
    }
};
