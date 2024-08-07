<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Hypervolemia;

class HypervolemiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Hypervolemia',
            'subTitle' => 'Hypervolemia',
            'activePage' => 'Data',
        ]);

        return view('plan.hypervolemia.index', compact(['pageTitle']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pageTitle = ([
            'titleHalaman' => 'Hypervolemia',
            'subTitle' => 'Hypervolemia',
            'activePage' => 'Create',
        ]);

        $pasien = Pasien::find($id);

        return view('plan.hypervolemia.create', compact(['pageTitle', 'pasien']));
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

            Hypervolemia::create([
                'patient_id' => $request->patient_id,
                'outcome_criteria' => $outcome_criteria,
                'action_plan' => $action_plan,
            ]);

            return redirect()->route('pasien.plan.hypervolemia.index')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
