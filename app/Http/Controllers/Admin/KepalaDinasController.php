<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KepalaDinas\StoreKepalaDinasRequest;
use App\Http\Requests\Admin\KepalaDinas\UpdateKepalaDinasRequest;
use App\Models\KepalaDinas;
use Intervention\Image\Facades\Image;

class KepalaDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepaladinas = KepalaDinas::latest()->get();
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
    public function show(KepalaDinas $kepalaDina)
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
        $attr = $request->validated();

        if ($request->file('photo') && $request->file('photo')->isValid()) {

            $path = storage_path('app/public/upload/profile/');
            $filename = $request->file('photo')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('photo')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            // delete old thumbnail from storage
            if ($kepaladina->photo != null && file_exists($path . $kepaladina->photo)) {
                unlink($path . $kepaladina->photo);
            }

            $attr['photo'] = $filename;
        }

        $kepaladina->update($attr);

        return redirect()->route('admin.kepaladinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaDinas $kepalaDina)
    {
        //
    }
}
