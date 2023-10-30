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
        Schema::create('jenis_instansi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        DB::table('jenis_instansi')->insert([
            'name' => 'SCIENCOM',
            'keterangan' => 'SCIENCOM',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'FORTIS',
            'keterangan' => 'FORTIS',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'FORTECH',
            'keterangan' => 'FORTECH',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Pemerintah',
            'keterangan' => 'Pemerintah',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'BUMN',
            'keterangan' => 'BUMN',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Pertambangan',
            'keterangan' => 'Pertambangan',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Manufaktur',
            'keterangan' => 'Manufaktur',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Perdagangan',
            'keterangan' => 'Perdagangan',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Pendidikan',
            'keterangan' => 'Pendidikan',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Bank/Asuransi',
            'keterangan' => 'Bank/Asuransi',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Distribusi',
            'keterangan' => 'Distribusi',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Transportasi',
            'keterangan' => 'Transportasi',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Telekomunikasi',
            'keterangan' => 'Telekomunikasi',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Komputer/IT',
            'keterangan' => 'Komputer/IT',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Otomotif',
            'keterangan' => 'Otomotif',
            'created_at' => '2020-06-23 11:29:31',
            'updated_at' => '2020-06-23 11:29:31'
        ]
        );
        DB::table('jenis_instansi')->insert([
            'name' => 'Lain nya',
            'keterangan' => 'lain nya',
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
        Schema::dropIfExists('jenis_instansi');
    }
};
