<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Majalah\StoreMajalahRequest;
use App\Http\Requests\Admin\Majalah\UpdateMajalahRequest;
use App\Models\Majalah;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class MajalahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majalahs = Majalah::latest()->get();
        return view('admin.majalah.index', compact('majalahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.majalah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMajalahRequest $request)
    {
        $attr = $request->validated();

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $path = storage_path('app/public/upload/majalah/cover/');
            $filename = $request->file('cover')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('cover')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            $attr['cover'] = $filename;
        }

        if ($request->file('file') && $request->file('file')->isValid()) {

            $filename = $request->file('file')->hashName();
            $request->file('file')->storeAs('upload/majalah/', $filename, 'public');

            $attr['file'] = $filename;
        }

        Majalah::create($attr);
        return redirect()->route('admin.majalah.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Majalah $majalah)
    {
        return view('admin.majalah.show', compact('majalah'));
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
        $attr = $request->validated();

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $path = storage_path('app/public/upload/majalah/cover/');
            $filename = $request->file('cover')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('cover')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            // delete old cover from storage
            if ($majalah->cover != null && file_exists($path . $majalah->cover)) {
                unlink($path . $majalah->cover);
            }

            $attr['cover'] = $filename;
        }

        if ($request->file('file') && $request->file('file')->isValid()) {

            $path = storage_path('app/public/uploads/majalah/');
            $filename = $request->file('file')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // delete old file from storage
            if ($majalah->file != null && file_exists($path . $majalah->file)) {
                unlink($path . $majalah->file);
            }

            $request->file('file')->storeAs('app/public/upload/majalah/', $filename);

            $attr['file'] = $filename;
        }

        $majalah->update($attr);
        return redirect()->route('admin.majalah.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Majalah $majalah)
    {
        try {
            // determine path file
            $pathFile = storage_path('app/public/upload/majalah/');
            $pathCover = storage_path('app/public/upload/majalah/cover/');

            // if magazine file exist remove file from directory
            if ($majalah->file != null && file_exists($pathFile . $majalah->file)) {
                unlink($pathFile . $majalah->file);
            }

            // if magazine cover exist remove file from directory
            if ($majalah->cover != null && file_exists($pathCover . $majalah->cover)) {
                unlink($pathCover . $majalah->cover);
            }

            $majalah->delete();
            return redirect()->route('admin.majalah.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.majalah.index')
                ->with('error', __($th->getMessage()));
        }
    }
}
