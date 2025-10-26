<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
      data-theme="theme-default"
      data-assets-path="{{ asset('theme/') }}"
      data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Halaman Login</title>

    <meta name="description" content="{{ $appSetting->description ?? '' }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="{{ asset('theme/img/favicon/' . ($appSetting->logo ?? 'favicon.ico')) }}" />

    {{-- Styles --}}
    @include('theme.styles')
    @yield('styles')

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background: linear-gradient(-135deg, #16cc74 10%, #094da1 90%, #2570e6 100%);
            font-family: sans-serif;
        }

        main {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <script src="{{ asset('theme/js/config.js') }}"></script>
</head>

<body>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center align-items-center py-4">
                                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('theme/img/favicon/favicon.ico') }}" alt="Perpustakaan Anak Zaman Logo" height="80" style="display: block;">
                                    <h4 class="d-none d-lg-block mb-0 ms-2 text-white fw-bold">
                                        Halaman Login <br>
                                        Task Management
                                    </h4>
                                </a>
                            </div>

                            <div class="card mb-3 shadow-lg">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>

                                    @if (session('pesan'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <span class="fw-semibold" style="color: #f7f5f4 !important">
                                                {{ session('pesan') }}
                                            </span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <span class="fw-semibold" style="color: #0c0c0c !important">
                                                {{ session('success') }}
                                            </span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <form class="row g-3" action="{{ route('auth') }}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required placeholder="Email">
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" required placeholder="Password">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-primary fw-bold w-100">LOGIN</button>
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <small class="text-muted">
                                                Belum punya akun?
                                                <a href="{{ route('regist') }}" class="fw-bold text-decoration-none">Daftar di sini</a>
                                            </small>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    {{-- Scripts --}}
    @include('theme.scripts')
    @yield('scripts')
</body>
</html>
