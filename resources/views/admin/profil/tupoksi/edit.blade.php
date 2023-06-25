@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Edit Tupoksi')
@section('menuProfil', 'active')

@push('style')
    <link rel="stylesheet" href="{{ asset('template/admin') }}/vendors/summernote/summernote-lite.min.css">
@endpush

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Tupoksi</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.tupoksi.update', $tupoksi->id) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-2">
                                                    <label for="isi_tupoksi">Tugas Pokok & Fungsi<span class="text-danger">
                                                            &#42;</span> :</label>
                                                    <textarea class="form-control @error('isi_tupoksi') is-invalid @enderror" name="isi_tupoksi" id="summernote"
                                                        cols="30" rows="10">{{ $tupoksi->isi_tupoksi }}</textarea>
                                                    @error('isi_tupoksi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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


    @push('script')
        <script src="{{ asset('template/admin') }}/vendors/summernote/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
                tabsize: 2,
                height: 450,
            })
        </script>
    @endpush
