<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Log In</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta5/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta5/dist/css/tabler-flags.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta5/dist/css/tabler-payments.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta5/dist/css/tabler-vendors.min.css">
    <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}">
</head>
<body class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>

      

       
        
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Register your account</h2>
                <div class="row mb-3">
                    <label for="username" class="col-md-4 col-form-label text-md-end">UserName</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullname" class="col-md-4 col-form-label text-md-end">Full Name</label>

                    <div class="col-md-6">
                        <input id="fullname" type="fullname" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname">

                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="password" class="col-md-4 col-form-label text-md-end">Role</label>
                    <div class="col-md-6">
                        <select name="role" class="form-select" value="{{ old('role') }}">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                    </div>
                </div>
            </form>
        
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="https://unpkg.com/@tabler/core@1.0.0-beta5/dist/js/tabler.min.js"></script>
<script src="{{ asset('js/demo.min.js') }}"></script>
</body>
</html>
