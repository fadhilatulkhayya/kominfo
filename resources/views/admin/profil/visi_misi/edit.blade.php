@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Visi Misi')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Visi & Misi</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.visimisi.update', $visimisi->id) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Visi<span class="text-danger">
                                                                &#42;</span> :</label>
                                                        <textarea class="form-control @error('visi') is-invalid @enderror" rows="3" name="visi">{{ $visimisi->visi }}</textarea>
                                                        @error('visi')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Misi<span class="text-danger">
                                                                &#42;</span> :</label>
                                                        <textarea class="form-control @error('misi') is-invalid @enderror" rows="3" name="misi">{{ $visimisi->misi }}</textarea>
                                                        @error('misi')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
