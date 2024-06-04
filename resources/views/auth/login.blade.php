<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        margin-top: 5vh;
    }

    .card {
        background-color: #fff;
    }
    </style>
</head>
<body class="bg-gray-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">    
                    <div class="card">
                        <div class="card-header text-center"><a href="{{ url('/login') }}"><img src="/assets/images/logo-page.png" alt="Logo" width="50px"></a></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
            
                                <!-- Email Address -->
                                <div class="form-group">
                                    <label class="block font-medium text-sm text-gray-700 mb-2"  for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="username" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <!-- Password -->
                                <div class="form-group mt-4">
                                    <label class="block font-medium text-sm text-gray-700 mb-2" for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <!-- Remember Me -->
                                <div class="form-group form-check block mt-4">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <label for="remember_me" class="form-check-label text-sm text-gray-600">{{ __('Remember me') }}</label>
                                </div>
            
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
            
                                    <button type="submit" class=" btn btn-primary">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>