<?php

namespace App\Http\Controllers;

use App\Models\Anxiety;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AnxietyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Anxiety',
            'subTitle' => 'Anxiety',
            'activePage' => 'Data',
        ]);

        return view('plan.anxiety.index', compact(['pageTitle']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pageTitle = ([
            'titleHalaman' => 'Anxiety',
            'subTitle' => 'Anxiety',
            'activePage' => 'Create',
        ]);

        $pasien = Pasien::find($id);

        return view('plan.anxiety.create', compact(['pageTitle', 'pasien']));

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

            Anxiety::create([
                'patient_id' => $request->patient_id,
                'outcome_criteria' => $outcome_criteria,
                'action_plan' => $action_plan,
            ]);

            return redirect()->route('pasien.plan.anxiety.index')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->route('pasien.plan.anxiety.index')->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anxiety $anxiety)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anxiety $anxiety)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anxiety $anxiety)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anxiety $anxiety)
    {
        //
    }
}
