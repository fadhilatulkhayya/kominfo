<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VisiMisi\StoreVisiMisiRequest;
use App\Http\Requests\Admin\VisiMisi\UpdateVisiMisiRequest;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisis =
            VisiMisi::latest()->get();
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
    public function show(VisiMisi $visimisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visimisi)
    {
        return view('admin.profil.visi_misi.edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisiMisiRequest $request, VisiMisi $visimisi)
    {
        $attr = $request->validated();

        $visimisi->update($attr);
        return redirect()->route('admin.visimisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMisi $visimisi)
    {
        //
    }
}
