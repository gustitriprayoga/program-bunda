<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Halaman Pasien',
            'subTitle' => 'Pasien',
            'activePage' => 'Data',
        ]);

        $pasiens = Pasien::all();

        return view('pasien.index', compact('pageTitle', 'pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = ([
            'titleHalaman' => 'Halaman Pasien',
            'subTitle' => 'Tambah Pasien',
            'activePage' => 'Tambah',
        ]);

        return view('pasien.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        try {

            // dd($request->all());
            $request->validate([
                'nama' => 'required',
                'umur' => 'required',
                'jenis_kelamin' => 'required',
                'pekerjaan' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'pendidikan' => 'required',
                'keluhan' => 'required|array',  // Validate as array
                'riwayat_penyakit' => 'required|array',  // Validate as array
                'riwayat_alergi' => 'required|array',  // Validate as array
                'riwayat_penyakit_keluarga' => 'required|array',  // Validate as array
                'aktifitas_sehari_hari' => 'required|array',  // Validate as array
                'sirkulasi' => 'required|array',  // Validate as array
                'integritas_ego' => 'required|array',  // Validate as array
                'eliminasi' => 'required|array',  // Validate as array
                'nutrisi' => 'required|array',  // Validate as array
                'rasa_sakit' => 'required|array',  // Validate as array
                'pernapasan' => 'required|array',  // Validate as array
                'keamanan' => 'required|array',  // Validate as array

                // Inursing Diagnosis
                'physiological_injury' => 'required|array',  // Validate as array
                'physiological_injury_minor_a' => 'required|array',  // Validate as array
                'physiological_injury_minor_b' => 'required|array',  // Validate as array
                'physiological_injury_minor_a_2' => 'required|array',  // Validate as array
                'physiological_injury_minor_b_2' => 'required|array',  // Validate as array
                'related_clinical_conditions' => 'required|array',  // Validate as array

                // 2.Ineffective peripheral perfusion
                'ineffective_subjective' => 'required|array',  // Validate as array
                'ineffective_objective' => 'required|array',  // Validate as array
                'ineffective_objective_a' => 'required|array',  // Validate as array
                'ineffective_objective_b' => 'required|array',  // Validate as array
                'associated_clinical_conditions_2' => 'required|array',  // Validate as array

                // 3 Hypervolmia

                'Hypervolemia_subjective' => 'required|array',
                'Hypervolemia_objective' => 'required|array',
                'Hypervolemia_subjective_1' => 'required|array',
                'Hypervolemia_objective_1' => 'required|array',
                'Hypervolemia_limitations' => 'required|array',

                // 4 Anxiety
                'Anxiety_subjective' => 'required|array',
                'Anxiety_objective' => 'required|array',
                'Anxiety_subjective_1' => 'required|array',
                'Anxiety_objective_1' => 'required|array',
                'Anxiety_related_condition' => 'required|array',

                // 5 Risk
                'risk_related_conditions' => 'required|array',

                // selected pain
                'status_penyakit' => 'required',


            ]);

            // Join array into a string for storage, if necessary
            $keluhan = implode(', ', $request->input('keluhan'));
            $riwayat_penyakit = implode(', ', $request->input('riwayat_penyakit'));
            $riwayat_alergi = implode(', ', $request->input('riwayat_alergi'));
            $riwayat_penyakit_keluarga = implode(', ', $request->input('riwayat_penyakit_keluarga'));
            $aktifitas_sehari_hari = implode(', ', $request->input('aktifitas_sehari_hari'));
            $sirkulasi = implode(', ', $request->input('sirkulasi'));
            $integritas_ego = implode(', ', $request->input('integritas_ego'));
            $eliminasi = implode(', ', $request->input('eliminasi'));
            $nutrisi = implode(', ', $request->input('nutrisi'));
            $rasa_sakit = implode(', ', $request->input('rasa_sakit'));
            $pernapasan = implode(', ', $request->input('pernapasan'));
            $keamanan = implode(', ', $request->input('keamanan'));
            $ineffective_subjective = implode(', ', $request->input('ineffective_subjective'));
            $ineffective_objective = implode(', ', $request->input('ineffective_objective'));
            $ineffective_objective_a = implode(', ', $request->input('ineffective_objective_a'));
            $ineffective_objective_b = implode(', ', $request->input('ineffective_objective_b'));

            // Inursing Diagnosis
            $physiological_injury = implode(', ', $request->input('physiological_injury'));
            $physiological_injury_minor_a = implode(', ', $request->input('physiological_injury_minor_a'));
            $physiological_injury_minor_b = implode(', ', $request->input('physiological_injury_minor_b'));
            $physiological_injury_minor_a_2 = implode(', ', $request->input('physiological_injury_minor_a_2'));
            $physiological_injury_minor_b_2 = implode(', ', $request->input('physiological_injury_minor_b_2'));
            $related_clinical_conditions = implode(', ', $request->input('related_clinical_conditions'));


            // 2.Ineffective peripheral perfusion

            $ineffective_subjective = implode(', ', $request->input('ineffective_subjective'));
            $ineffective_objective = implode(', ', $request->input('ineffective_objective'));
            $ineffective_objective_a = implode(', ', $request->input('ineffective_objective_a'));
            $ineffective_objective_b = implode(', ', $request->input('ineffective_objective_b'));

            // 3 Hypervolmia
            $Hypervolemia_subjective = implode(', ', $request->input('Hypervolemia_subjective'));
            $Hypervolemia_objective = implode(', ', $request->input('Hypervolemia_objective'));
            $Hypervolemia_subjective_1 = implode(', ', $request->input('Hypervolemia_subjective_1'));
            $Hypervolemia_objective_1 = implode(', ', $request->input('Hypervolemia_objective_1'));
            $Hypervolemia_limitations = implode(', ', $request->input('Hypervolemia_limitations'));

            // 4 Anxiety
            $Anxiety_subjective = implode(', ', $request->input('Anxiety_subjective'));
            $Anxiety_objective = implode(', ', $request->input('Anxiety_objective'));
            $Anxiety_subjective_1 = implode(', ', $request->input('Anxiety_subjective_1'));
            $Anxiety_objective_1 = implode(', ', $request->input('Anxiety_objective_1'));
            $Anxiety_related_condition = implode(', ', $request->input('Anxiety_related_condition'));

            // 5 Risk
            $risk_related_conditions = implode(', ', $request->input('risk_related_conditions'));



            // Store the data (adjust based on your storage logic)
            Pasien::create([
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'pekerjaan' => $request->input('pekerjaan'),
                'alamat' => $request->input('alamat'),
                'status' => $request->input('status'),
                'pendidikan' => $request->input('pendidikan'),
                'keluhan' => $keluhan,  // Store the complaints
                'riwayat_penyakit' => $riwayat_penyakit,  // Store the complaints
                'riwayat_alergi' => $riwayat_alergi,  // Store the complaints
                'riwayat_penyakit_keluarga' => $riwayat_penyakit_keluarga,  // Store the complaints
                'aktifitas_sehari_hari' => $aktifitas_sehari_hari,  // Store the complaints
                'sirkulasi' => $sirkulasi,  // Store the complaints
                'integritas_ego' => $integritas_ego,  // Store the complaints
                'eliminasi' => $eliminasi,  // Store the complaints
                'nutrisi' => $nutrisi,  // Store the complaints
                'rasa_sakit' => $rasa_sakit,  // Store the complaints
                'pernapasan' => $pernapasan,  // Store the complaints
                'keamanan' => $keamanan,  // Store the complaintswww

                // Inursing Diagnosis
                'physiological_injury' => $physiological_injury,  // Store the complaints
                'physiological_injury_minor_a' => $physiological_injury_minor_a,  // Store the complaints
                'physiological_injury_minor_b' => $physiological_injury_minor_b,  // Store the complaints
                'physiological_injury_minor_a_2' => $physiological_injury_minor_a_2,  // Store the complaints
                'physiological_injury_minor_b_2' => $physiological_injury_minor_b_2,  // Store the complaints
                'related_clinical_conditions' => $related_clinical_conditions,  // Store the complaints

                // 2.Ineffective peripheral perfusion
                'ineffective_subjective' => $ineffective_subjective,  // Store the complaints
                'ineffective_objective' => $ineffective_objective,  // Store the complaints
                'ineffective_objective_a' => $ineffective_objective_a,  // Store the complaints
                'ineffective_objective_b' => $ineffective_objective_b,  // Store the complaints

                // 3 Hypervolmia
                'Hypervolemia_subjective' => $Hypervolemia_subjective,
                'Hypervolemia_objective' => $Hypervolemia_objective,
                'Hypervolemia_subjective_1' => $Hypervolemia_subjective_1,
                'Hypervolemia_objective_1' => $Hypervolemia_objective_1,
                'Hypervolemia_limitations' => $Hypervolemia_limitations,

                // 4 Anxiety
                'Anxiety_subjective' => $Anxiety_subjective,
                'Anxiety_objective' => $Anxiety_objective,
                'Anxiety_subjective_1' => $Anxiety_subjective_1,
                'Anxiety_objective_1' => $Anxiety_objective_1,
                'Anxiety_related_condition' => $Anxiety_related_condition,

                // 5 Risk
                'risk_related_conditions' => $risk_related_conditions,

                // selected pain
                'status_penyakit' => $request->input('status_penyakit'),

            ]);

            return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan');
        } catch (\Exception $e) {
            // return redirect()->back()->with('error', $e->getMessage());
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = ([
            'titleHalaman' => 'Halaman Detail Pasien',
            'subTitle' => 'Detail Pasien',
            'activePage' => 'Detail',
        ]);

        $pasien = Pasien::find($id);

        return view('pasien.show', compact('pageTitle', 'pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = ([
            'titleHalaman' => 'Halaman Edit Pasien',
            'subTitle' => 'Edit Pasien',
            'activePage' => 'Edit',
        ]);

        $pasien = Pasien::find($id);

        return view('pasien.edit', compact('pageTitle', 'pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->all());

        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
