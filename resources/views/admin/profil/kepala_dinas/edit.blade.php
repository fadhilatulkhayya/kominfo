@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Edit Kepala Dinas')
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
            <h3>Edit Sambutan Kepala Dinas</h3>
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
                                            action="{{ route('admin.kepaladinas.update', $kepaladina->id) }}"
                                            enctype="multipart/form-data" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if ($kepaladina->photo == null)
                                                                    <label for="photo" class="form-label">Gambar
                                                                        Lama </label>
                                                                    <br>
                                                                    <img src="https://via.placeholder.com/350?text=No+Image+Avaiable"
                                                                        alt="photo" class="img-thumbnail" alt="photo"
                                                                        width="125" height="75"
                                                                        style="object-fit: cover">
                                                                @else
                                                                    <label for="photo" class="form-label">Gambar
                                                                        Lama </label>
                                                                    <br>
                                                                    <img src="{{ asset('storage/upload/profile/' . $kepaladina->photo) }}"
                                                                        alt="Thumbnail" class="img-thumbnail" width="125"
                                                                        height="75" style="object-fit: cover">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label for="photo" class="form-label">Pilih Foto
                                                                    Terbaru<span class="text-danger">
                                                                        &#42;</span> :</label>
                                                                <input
                                                                    class="form-control  @error('photo') is-invalid @enderror"
                                                                    type="file" name="photo" />
                                                                @error('photo')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-12 mb-2">
                                                            <label for="sambutan">Kata Sambutan Kepala Dinas<span
                                                                    class="text-danger"> &#42;</span> :</label>
                                                            <textarea class="form-control @error('sambutan') is-invalid @enderror" name="sambutan" id="summernote" cols="30"
                                                                rows="10">{{ $kepaladina->sambutan }}</textarea>
                                                            @error('sambutan')
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


    @push('script')
        <script src="{{ asset('template/admin') }}/vendors/summernote/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
                tabsize: 2,
                height: 300,
            })
        </script>
    @endpush
