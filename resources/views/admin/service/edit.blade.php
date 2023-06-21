@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Layanan')
@section('menuLayanan', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Layanan</h3>
            <br>
        </div>
        <section class="section">
            <div class="card">
                <h5 class="card-header">Edit Layanan</h5>

                <div class="card-body">
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('admin.service.include.form')
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
