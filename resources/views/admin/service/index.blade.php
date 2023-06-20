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
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->url }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>
                                        <span class="badge bg-warning">Edit</span>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
