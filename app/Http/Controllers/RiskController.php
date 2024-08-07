<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Risk;
use Illuminate\Http\Request;


class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Risk',
            'subTitle' => 'Risk',
            'activePage' => 'Data',
        ]);

        return view('plan.risk.index', compact(['pageTitle']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pageTitle = ([
            'titleHalaman' => 'Risk',
            'subTitle' => 'Risk',
            'activePage' => 'Create',
        ]);

        $pasien = Pasien::find($id);

        return view('plan.risk.create', compact(['pageTitle', 'pasien']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'patient_id' => 'required|array',
                'outcome_criteria' => 'required|array',
                'action_plan' => 'required|array',
            ]);

            $outcome_criteria = implode(', ', $request->input('outcome_criteria'));
            $action_plan = implode(', ', $request->input('action_plan'));

            Risk::create([
                'patient_id' => $request->patient_id,
                'outcome_criteria' => $outcome_criteria,
                'action_plan' => $action_plan,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('risk.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Risk $risk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Risk $risk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Risk $risk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Risk $risk)
    {
        //
    }
}
