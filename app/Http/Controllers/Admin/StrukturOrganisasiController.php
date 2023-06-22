<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StrukturOrganisasi\StoreStrukturOrganisasiRequest;
use App\Http\Requests\Admin\StrukturOrganisasi\UpdateStrukturOrganisasiRequest;
use App\Models\StrukturOrganisasi;
use Intervention\Image\Facades\Image;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strukturorganisasis = StrukturOrganisasi::all();
        return view('admin.profil.struktur_organisasi.index', compact('strukturorganisasis'));
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
    public function store(StoreStrukturOrganisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StrukturOrganisasi $strukturorganisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StrukturOrganisasi $strukturorganisasi)
    {
        return view('admin.profil.struktur_organisasi.edit', compact('strukturorganisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStrukturOrganisasiRequest $request, StrukturOrganisasi $strukturorganisasi)
    {
        $attr = $request->validated();

        if ($request->file('gambar') && $request->file('gambar')->isValid()) {

            $path = storage_path('app/public/profile/');
            $filename = $request->file('gambar')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('gambar')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            // delete old thumbnail from storage
            if ($strukturorganisasi->gambar != null && file_exists($path . $strukturorganisasi->gambar)) {
                unlink($path . $strukturorganisasi->gambar);
            }

            $attr['gambar'] = $filename;
        }

        $strukturorganisasi->update($attr);

        return redirect()->route('admin.strukturorganisasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StrukturOrganisasi $strukturorganisasi)
    {
        //
    }
}
