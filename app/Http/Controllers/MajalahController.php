<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMajalahRequest;
use App\Http\Requests\UpdateMajalahRequest;
use App\Models\Majalah;

class MajalahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majalahs = Majalah::all();
        return view('admin.majalah.index', compact('majalahs'));
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
    public function store(StoreMajalahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Majalah $majalah)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Majalah $majalah)
    {
        return view('admin.majalah.edit', compact('majalah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMajalahRequest $request, Majalah $majalah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Majalah $majalah)
    {
        //
    }
}
