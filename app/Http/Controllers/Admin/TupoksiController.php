<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tupoksi\StoreTupoksiRequest;
use App\Http\Requests\Admin\Tupoksi\UpdateTupoksiRequest;
use App\Models\Tupoksi;

class TupoksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tupoksis =
            Tupoksi::latest()->get();
        return view('admin.profil.tupoksi.index', compact('tupoksis'));
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
    public function store(StoreTupoksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tupoksi $tupoksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tupoksi $tupoksi)
    {
        return view('admin.profil.tupoksi.edit', compact('tupoksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTupoksiRequest $request, Tupoksi $tupoksi)
    {

        $attr = $request->validated();

        $tupoksi->update($attr);
        return redirect()->route('admin.tupoksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tupoksi $tupoksi)
    {
        //
    }
}
