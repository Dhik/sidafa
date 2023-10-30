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
        Schema::create('embed', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_sub_menu');
            $table->string('name');
            $table->text('iframe');
            $table->text('keterangan');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_menu')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');

            
            $table->foreign('id_sub_menu')
            ->references('id')
            ->on('sub_menu')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embed');
    }
};
