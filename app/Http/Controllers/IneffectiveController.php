<?php

namespace App\Http\Controllers;

use App\Models\Ineffective;
use Illuminate\Http\Request;

class IneffectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ([
            'titleHalaman' => 'Ineffective',
            'subTitle' => 'Ineffective',
            'activePage' => 'Data',
        ]);

        return view('plan.ineffective.index', compact(['pageTitle']));
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
    public function show(Ineffective $ineffective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ineffective $ineffective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ineffective $ineffective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ineffective $ineffective)
    {
        //
    }
}
