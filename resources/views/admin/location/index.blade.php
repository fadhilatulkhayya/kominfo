@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Lokasi')
@section('menuLokasi', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Lokasi</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.location.create') }}">
                                        Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class='table table-striped' id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Longitude</th>
                                                <th>Latitude</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($locations as $location)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $location->name }}</td>
                                                    <td>{{ $location->category() }}</td>
                                                    <td>{{ $location->longitude }}</td>
                                                    <td>{{ $location->latitude }}</td>
                                                    <td>@include('admin.location.include.action')</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Maaf, belum ada data</td>
                                                </tr>
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
