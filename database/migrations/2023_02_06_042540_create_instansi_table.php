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
        Schema::create('instansi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis_instansi');
            $table->string('name');
            $table->string('no_tlp');
            $table->text('alamat');
            $table->string('fax');
            $table->string('file');
            $table->timestamps();

            $table->foreign('id_jenis_instansi')
            ->references('id')
            ->on('jenis_instansi')
            ->onDelete('cascade');
        });

        DB::table('instansi')->insert([
            'id_jenis_instansi' => 1,
            'name' => 'Sciencom',
            'no_tlp' => '0303',
            'alamat' => 'Sciencom',
            'fax' => '-',
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
        Schema::dropIfExists('instansi');
    }
};
