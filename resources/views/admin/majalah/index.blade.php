@extends('admin')
@section('title', 'Diskominfo Bone Bolango - E-Magazine')
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
                                    <a class="btn btn-sm btn-primary" href="{{ route('majalah.create') }}">
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
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse ($majalahs as $majalah)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td><img src="{{ asset('storage/majalah/' . $majalah->cover) }}"
                                                            class="img-thumbnail" width="200" height="150"
                                                            style="object-fit: cover" /></td>
                                                    <td><a
                                                            href="{{ url('storage/majalah/' . $majalah->file) }}">Download</a>
                                                    </td>
                                                    <td>{{ $majalah->name }}</td>
                                                    <td>
                                                        <a href="{{ route('majalah.edit', $majalah->id) }}"
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
