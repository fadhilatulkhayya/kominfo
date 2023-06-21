@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Tupoksi')
@section('menuProfil', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profil/Tugas Pokok & Fungsi</h3>
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
                                                <th>Isi Tugas Pokok & Fungsi</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tupoksis as $tupoksi)
                                                <tr>
                                                    <td>{!! substr(strip_tags($tupoksi->isi_tupoksi), 0, 488) !!}</td>
                                                    <td>
                                                        <a href="{{ route('tupoksi.edit', $tupoksi->id) }}"
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
