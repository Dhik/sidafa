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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_instansi');
            $table->string('bagian');
            $table->string('jabatan');
            $table->string('no_tlp');
            $table->text('alamat');
            $table->string('file');
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('id_instansi')
            ->references('id')
            ->on('instansi')
            ->onDelete('cascade');

        });

        DB::table('pegawai')->insert([
            'id_user' => 1,
            'id_instansi' => 1,
            'bagian' => 'Admin',
            'jabatan' => 'Admin',
            'no_tlp' => '0303',
            'alamat' => 'Sciencom',
            'file' => 'no.png',
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
        Schema::dropIfExists('pegawai');
    }
};
