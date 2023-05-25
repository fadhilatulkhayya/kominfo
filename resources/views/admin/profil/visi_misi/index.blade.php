@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Visi Misi')
@section('menuProfil', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Profil/Visi & Misi</h3>
            <br>
        </div>
        <section class="section">
            <div class="card">
                {{-- <div class="card-header">
                    Sambutan Kepala Dinas
                </div> --}}
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
                                    <td>{{ $visimisi->visi }}</td>
                                    <td>{{ $visimisi->misi }}</td>
                                    <td>
                                        <a href="{{ route('visimisi.edit', $visimisi->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
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
