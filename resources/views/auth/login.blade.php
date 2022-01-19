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

      

       
        <form class="card card-md" method="post" action="{{ route('checkLogin') }}"  autocomplete="off">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login to your account</h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="username" name="username" class="form-control" placeholder="Enter email">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description"></span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        <span class="input-group-text">
                </span>
                    </div>
                </div>
                <div class="mt-4 text-center">
                   Don't have an account? <a href="{{route('register')}}">Register</a>
                </div>
                <div class="form-footer">
                    <button type="submit" name="login" class="btn btn-primary w-100">Sign in</button>
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
