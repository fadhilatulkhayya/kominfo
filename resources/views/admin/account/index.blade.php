@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Update Account')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Akun</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-header">Update Akun</h5>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('user-password.update') }}">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label for="password">{{ __('Password Saat Ini') }}</label>
                                                <input type="password" name="current_password"
                                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                                    id="password" placeholder="Password Saat Ini">
                                                @error('current_password', 'updatePassword')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">{{ __('Password Baru') }}</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                                    id="password" placeholder="Password Baru">
                                                @error('password', 'updatePassword')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label
                                                    for="password_confirmation">{{ __('Konfirmasi Password Baru') }}</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Konfirmasi Password Baru">
                                            </div>

                                            <button type="submit"
                                                class="btn btn-primary">{{ __('Ubah Password') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    @endsection
