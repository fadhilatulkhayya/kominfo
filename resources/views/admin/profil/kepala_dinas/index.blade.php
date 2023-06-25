@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Kepala Dinas')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profil/ Sambutan Kepala Dinas</h3>
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
                                                <th>Kepala Dinas</th>
                                                <th>Kata Sambutan Kepala Dinas</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kepaladinas as $kepaladina)
                                                <tr>
                                                    <td><img src="{{ asset('storage/upload/profile/' . $kepaladina->photo) }}"
                                                            class="img-thumbnail" width="200" height="150"
                                                            style="object-fit: cover" /></td>
                                                    <td>{!! substr(strip_tags($kepaladina->sambutan), 0, 418) !!}</td>
                                                    <td>
                                                        <a href="{{ route('admin.kepaladinas.edit', $kepaladina->id) }}"
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
