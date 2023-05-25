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
                <div class="card-header">
                    Daftar Layanan Diskominfo Bone Bolango
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>URL</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>VehiculaAemconsequat.pdf</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur molestiae in
                                    distinctio </td>
                                <td>Januari 2020</td>
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
