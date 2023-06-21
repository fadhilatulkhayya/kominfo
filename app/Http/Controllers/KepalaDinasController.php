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
        $kepaladina = KepalaDinas::all();
        return view('admin.profil.kepala_dinas.index', compact('kepaladina'));
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
    public function edit(KepalaDinas $kepaladina)
    {
        return view('admin.profil.kepala_dinas.edit', compact('kepaladina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKepalaDinasRequest $request, KepalaDinas $kepaladina)
    {
        $attr = $request->validate();

        if ($photo = $request->file('photo')) {
            $destinationPath = 'app/public/upload/berita/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
            $attr['photo'] = "$profileImage";

            if ($kepaladina->photo != null && file_exists($destinationPath . $kepaladina->photo)) {
                unlink($destinationPath . $kepaladina->photo);
            }
        }

        $kepaladina->update($attr);
        return redirect()->route('kepaladinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaDinas $kepalaDinas)
    {
        //
    }
}
