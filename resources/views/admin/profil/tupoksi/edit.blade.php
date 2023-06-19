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
                                        <form class="form" action="{{ route('tupoksi.update', $tupoksi->id) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-2">
                                                    <textarea name="isi_tupoksi" id="summernote" cols="30" rows="10">{{ $tupoksi->isi_tupoksi }}</textarea>
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


    @push('script')
        <script src="{{ asset('template/admin') }}/vendors/summernote/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
                tabsize: 2,
                height: 120,
            })
        </script>
    @endpush
