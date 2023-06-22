@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Edit Struktur Organisasi')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Struktur Organisasi</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form"
                                            action="{{ route('strukturorganisasi.update', $strukturorganisasi->id) }}"
                                            enctype="multipart/form-data" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if ($strukturorganisasi->gambar == null)
                                                                    <label for="gambar" class="form-label">Gambar
                                                                        Lama</label>
                                                                    <br>
                                                                    <img src="https://via.placeholder.com/350?text=No+Image+Avaiable"
                                                                        alt="gambar" class="img-thumbnail" alt="gambar"
                                                                        width="250" height="250"
                                                                        style="object-fit: cover">
                                                                @else
                                                                    <label for="photo" class="form-label">Gambar
                                                                        Lama</label>
                                                                    <br>
                                                                    <img src="{{ asset('storage/profile/' . $strukturorganisasi->gambar) }}"
                                                                        alt="gambar" class="img-thumbnail" width="250"
                                                                        height="250" style="object-fit: cover">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label for="gambar" class="form-label">Pilih Gambar
                                                                    Terbaru :</label>
                                                                <input
                                                                    class="form-control @error('gambar') is-invalid @enderror"
                                                                    type="file" name="gambar" />
                                                                @error('gambar')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label for="caption">Caption : </label>
                                                            <textarea class="form-control @error('caption') is-invalid @enderror" rows="3" name="caption">{{ $strukturorganisasi->caption }}</textarea>
                                                            @error('caption')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
