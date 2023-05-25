@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Beranda Admin')
@section('menuDashboard', 'active')

{{-- @section('menuDashboard', 'nav-item') --}}

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <br>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-6 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-4 py-2 d-flex justify-content-between'>
                                    <h3 class='card-title'>Jumlah Berita</h3>
                                </div>
                                <div class="px-4 py-2 d-flex justify-content-between">
                                    <h3 class='card-title d-flex align-items-left'>2000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-4 py-2 d-flex justify-content-between'>
                                    <h3 class='card-title'>Jumlah E-Magazine</h3>
                                </div>
                                <div class="px-4 py-2 d-flex justify-content-between">
                                    <h3 class='card-title d-flex align-items-left'>2000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Statistik Berita</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12 col-12">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card widget-todo">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h4 class="card-title d-flex">
                                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                            </h4>

                        </div>
                        <div class="card-body px-0 py-1">
                            <table class='table table-borderless'>
                                <tr>
                                    <td class='col-3'>UI Design</td>
                                    <td class='col-6'>
                                        <div class="progress progress-info">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>60%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>VueJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" style="width: 35%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>30%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Laravel</td>
                                    <td class='col-6'>
                                        <div class="progress progress-danger">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>50%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>ReactJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>80%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Go</td>
                                    <td class='col-6'>
                                        <div class="progress progress-secondary">
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>65%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
