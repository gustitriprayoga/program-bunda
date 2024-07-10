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
        Pasien::create($request->all());

        return redirect()->route('pasien.index');
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
