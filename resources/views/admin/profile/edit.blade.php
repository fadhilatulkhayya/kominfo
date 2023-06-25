@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Edit Layanan')
@section('menuLayanan', 'active')

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
            <h3>Edit Profil</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{ route('admin.profile.update', $profile->slug) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            @include('admin.profile.include.form')
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                                <a href="{{ url()->previous() }}"
                                                    class="btn btn-outline-secondary">Kembali</a>
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
            $('#body').summernote({
                tabsize: 2,
                height: 300,
            })
        </script>
    @endpush
