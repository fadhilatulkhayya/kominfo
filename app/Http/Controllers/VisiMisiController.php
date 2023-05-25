<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisiMisiRequest;
use App\Http\Requests\UpdateVisiMisiRequest;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisis = VisiMisi::all();
        return view('admin.profil.visi_misi.index', compact('visimisis'));
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
    public function store(StoreVisiMisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($visiMisi)
    {
        $visimisi = VisiMisi::find($visiMisi);
        return view('admin.profil.visi_misi.edit')->with('visimisi', $visimisi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisiMisiRequest $request, VisiMisi $visiMisi)
    {
        $validateData = $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $visiMisi->update($validateData);
        return redirect()->route('visimisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMisi $visiMisi)
    {
        //
    }
}
