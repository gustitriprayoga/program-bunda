<?php

namespace App\Http\Controllers;

use App\Models\Anxiety;
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
