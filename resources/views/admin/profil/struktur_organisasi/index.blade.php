@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Struktur Organisasi')
@section('menuProfil', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Profil/Struktur Organisasi</h3>
            <br>
        </div>
        <section class="section">
            <div class="card">
                {{-- <div class="card-header">
                    Sambutan Kepala Dinas
                </div> --}}
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
                            <tr>
                                <td>Graiden</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, modi dignissimos
                                    excepturi similique</td>
                                <td>
                                    <span class="badge bg-warning">Edit</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
