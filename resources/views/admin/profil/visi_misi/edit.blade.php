@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Visi Misi')
@section('menuProfil', 'active')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Edit Visi & Misi</h3>
            <br>
            <a href="{{ route('visimisi.index') }}" class="btn btn-md btn-primary">Kembali</a>
            <br>
            <br>
        </div>
        <section class="section">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Visi : </label>
                                                <textarea class="form-control" rows="3" name="visi">{{ $visimisi->visi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Misi : </label>
                                                <textarea class="form-control" rows="3" name="misi">{{ $visimisi->misi }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
