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
                    Daftar Layanan
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('admin.services.create') }}" class="btn btn-md btn-primary">Tambah
                                data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>URL</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->url }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>@include('admin.service.include.action')</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Maaf, belum ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
