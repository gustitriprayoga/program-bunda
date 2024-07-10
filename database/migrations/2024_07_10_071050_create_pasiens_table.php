<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->enum('jenis_kelamin', ['Man', 'Womman']);
            $table->enum('pekerjaan', ['Civil servants', 'Noncivil servants', 'Merchant', 'Private', 'housewife', 'Etc']);
            $table->string('alamat');
            $table->enum('status', ['Single', 'Married', 'Divorced', 'Widow']);
            $table->enum('pendidikan', ['Primary school', 'Junior high school', 'High school', 'Diploma', 'Bachelor', 'Master', 'Doctor', 'Professor']);
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->string('riwayat_alergi');
            $table->string('riwayat_penyakit_keluarga');
            $table->string('aktifitas_sehari_hari');
            $table->string('no_telp');
            $table->string('sirkulasi');
            $table->string('integritas_ego');
            $table->string('eliminasi');
            $table->string('nutrisi');
            $table->string('rasa_sakit');
            $table->string('pernapasan');
            $table->string('keamanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
