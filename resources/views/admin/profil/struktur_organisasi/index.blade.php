@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Struktur Organisasi')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profil/Struktur Organisasi</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <table class='table table-striped' id="table1">
                                        <thead>
                                            <tr>
                                                <th>Gambar Struktur Ogranisasi</th>
                                                <th>Caption Gambar</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($strukturorganisasis as $strukturorganisasi)
                                                <tr>
                                                    <td><img src="{{ asset('storage/profile/' . $strukturorganisasi->gambar) }}"
                                                            class="img-thumbnail" width="200" height="150"
                                                            style="object-fit: cover" /></td>
                                                    <td>{{ Str::limit($strukturorganisasi->caption, 100) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.strukturorganisasi.edit', $strukturorganisasi->id) }}"
                                                            class="btn btn-sm btn-warning">Edit</a>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
