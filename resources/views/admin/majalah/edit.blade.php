@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Edit Majalah')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit E-Magazine</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('majalah.update', $majalah->id) }}"
                                            enctype="multipart/form-data" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if ($majalah->cover == null)
                                                                    <label for="cover" class="form-label">Cover
                                                                        Lama</label>
                                                                    <br>
                                                                    <img src="https://via.placeholder.com/350?text=No+Image+Avaiable"
                                                                        alt="cover" class="img-thumbnail" alt="cover"
                                                                        width="250" height="250"
                                                                        style="object-fit: cover">
                                                                @else
                                                                    <label for="photo" class="form-label">Cover
                                                                        Lama</label>
                                                                    <br>
                                                                    <img src="{{ asset('storage/majalah/' . $majalah->cover) }}"
                                                                        alt="cover" class="img-thumbnail" width="250"
                                                                        height="250" style="object-fit: cover">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label for="cover" class="form-label">Pilih Cover
                                                                    Terbaru :</label>
                                                                <input
                                                                    class="form-control @error('cover') is-invalid @enderror"
                                                                    type="file" name="cover" />
                                                                @error('cover')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label for="name">Name : </label>
                                                            <textarea class="form-control @error('name') is-invalid @enderror" rows="2" name="name">{{ $majalah->name }}</textarea>
                                                            @error('name')
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
