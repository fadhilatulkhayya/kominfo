@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Visi Misi')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profil/Visi & Misi</h3>
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
                                                <th>Visi</th>
                                                <th>Misi</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($visimisis as $visimisi)
                                                <tr>
                                                    <td>{{ Str::limit($visimisi->visi, 150) }}</td>
                                                    <td>{{ Str::limit($visimisi->misi, 150) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.visimisi.edit', $visimisi->id) }}"
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
