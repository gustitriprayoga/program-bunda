<?php

namespace App\Http\Controllers;

use App\Models\AcutePain;
use Illuminate\Http\Request;

class AcutePainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Acute Pain',
            'subTitle' => 'Acute Pain',
            'activePage' => 'Data',
        ]);

        return view('plan.acute-pain.index', compact(['pageTitle']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
