@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Majalah')
@section('menuMajalah', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>E-Magazine</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.majalah.create') }}">
                                        Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class='table table-striped' id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Cover</th>
                                                <th>E-Magazine</th>
                                                <th>Judul</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($majalahs as $majalah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('storage/upload/majalah/cover/' . $majalah->cover) }}"
                                                            class="img-thumbnail" width="200" height="150"
                                                            style="object-fit: cover" /></td>
                                                    <td><a href="{{ url('storage/upload/majalah/' . $majalah->file) }}"
                                                            target="_blank">{{ $majalah->name }}</a>
                                                    </td>
                                                    <td>{{ $majalah->name }}</td>
                                                    <td>@include('admin.majalah.include.action')</td>
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
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
