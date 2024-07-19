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
            $table->string('jenis_kelamin')->nullable();
            $table->enum('pekerjaan', ['Civil servants', 'Noncivil servants', 'Merchant', 'Private', 'housewife', 'Etc']);
            $table->string('alamat');
            $table->enum('status', ['Merry', 'Not Merry']);
            $table->string('pendidikan')->nullable();
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->string('riwayat_alergi');
            $table->string('riwayat_penyakit_keluarga');
            $table->string('aktifitas_sehari_hari');
            $table->string('sirkulasi');
            $table->string('integritas_ego');
            $table->string('eliminasi');
            $table->string('nutrisi');
            $table->string('rasa_sakit');
            $table->string('pernapasan');
            $table->string('keamanan');

            // Nursing Diagnosa
            $table->string('physiological_injury');
            $table->string('physiological_injury_minor_a');
            $table->string('physiological_injury_minor_b');
            $table->string('physiological_injury_minor_a_2');
            $table->string('physiological_injury_minor_b_2');
            $table->string('related_clinical_conditions');

            // inffective peripheral perfusion
            $table->string('ineffective_subjective');
            $table->string('ineffective_objective');
            $table->string('ineffective_objective_a');
            $table->string('ineffective_objective_b');
            $table->string('associated_clinical_conditions_2')->nullable();

            // Hypervolmia
            $table->string('Hypervolemia_subjective');
            $table->string('Hypervolemia_objective');
            $table->string('Hypervolemia_subjective_1');
            $table->string('Hypervolemia_objective_1');
            $table->string('Hypervolemia_limitations');

            // Anxiety
            $table->string('Anxiety_subjective');
            $table->string('Anxiety_objective');
            $table->string('Anxiety_subjective_1');
            $table->string('Anxiety_objective_1');
            $table->string('Anxiety_related_condition');

            // risk
            $table->string('risk_related_conditions');

            // selected pain

            $table->string('status_penyakit');


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
