<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKepalaDinasRequest;
use App\Http\Requests\UpdateKepalaDinasRequest;
use App\Models\KepalaDinas;

class KepalaDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepaladinas = KepalaDinas::all();
        return view('admin.profil.kepala_dinas.index', compact('kepaladinas'));
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
    public function store(StoreKepalaDinasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KepalaDinas $kepalaDinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaDinas $kepalaDinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKepalaDinasRequest $request, KepalaDinas $kepalaDinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaDinas $kepalaDinas)
    {
        //
    }
}
