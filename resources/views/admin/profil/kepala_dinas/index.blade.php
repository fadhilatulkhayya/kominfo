@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Kepala Dinas')
@section('menuProfil', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Profil/Kepala Dinas</h3>
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
                                <th>Kepala Dinas</th>
                                <th>Gambar</th>
                                <th>Kata Sambutan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
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
