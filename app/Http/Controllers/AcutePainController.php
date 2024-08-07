<?php

namespace App\Http\Controllers;

use App\Models\AcutePain;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AcutePainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = [
            'titleHalaman' => 'Acute Pain',
            'subTitle' => 'Acute Pain',
            'activePage' => 'Index',
        ];

        $pasiens = Pasien::all(); // Retrieve all patients
        $acutePains = AcutePain::all(); // Retrieve all acute pains

        return view('plan.acute-pain.index', compact('pasiens', 'pageTitle', 'acutePains'));
    }

    public function create()
    {
        $pageTitle = [
            'titleHalaman' => 'Acute Pain',
            'subTitle' => 'Acute Pain',
            'activePage' => 'Create',
        ];

        $pasiens = Pasien::all(); // Retrieve all patients

        return view('plan.acute-pain.create', compact('pageTitle', 'pasiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'pasien_id' => 'required',
                'outcome_criteria' => 'required|array',
                'action_plan' => 'required|array',
                'reduce_pain' => 'required|array',
            ]);

            // Assuming you need the first pasien_id for the redirect

            $outcome_criteria = implode(', ', $request->input('outcome_criteria'));
            $action_plan = implode(', ', $request->input('action_plan'));
            $reduce_pain = implode(', ', $request->input('reduce_pain'));

            AcutePain::create([
                'pasien_id' => $request->pasien_id,
                'outcome_criteria' => $outcome_criteria,
                'action_plan' => $action_plan,
                'reduce_pain' => $reduce_pain,
            ]);

            return redirect()->route('pasien.plan.acutepain.index')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // Ensure the same patient_id is available in case of error
            return redirect()->route('pasien.plan.acutepain.index')->with('error', $e->getMessage().'Data gagal disimpan');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(AcutePain $acutePain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcutePain $acutePain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AcutePain $acutePain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcutePain $acutePain)
    {
        //
    }
}
