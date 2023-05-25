@extends('admin')
@section('title', 'Diskominfo Bone Bolango - E-magazine')
@section('menuMajalah', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>E-Magazine</h3>
            <br>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Daftar E-Magazine Diskominfo Bone Bolango
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>E-Magazine</th>
                                <th>Deskripsi</th>
                                <th>Edisi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
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
