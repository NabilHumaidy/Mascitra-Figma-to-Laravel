@extends('layouts.loreg')

@section('title')
    Login
@endsection

@section('content')
    <style>
        body {
            background-image: url('/image/loreg.png');
            /* Ganti dengan path sesuai struktur proyek Anda */
            background-size: cover;
        }

        .boxform-loreg {
            background-color: rgba(255, 255, 255, 0.9);
            height: 100vh;
            width: 50vw;
        }

        .loreg-logo {
            width: 16vw;
        }

        .icon {
            width: 20px;
            /* Sesuaikan ukuran icon */
            height: auto;
        }

        .show-password {
            cursor: pointer;
        }

        .loreg-input {
            background-color: #F5F5F5;
            border: none;
            padding-left: 17px;
            border-bottom: 2px solid rgba(0, 20, 31, 0.44);
            font-size: 17px;
        }

        .loreg-icon {
            background-color: #F5F5F5;
            border: none;
            padding: 15px;
            border-bottom: 2px solid rgba(0, 20, 31, 0.44);
            color: rgba(0, 20, 31, 0.7);
            font-size: 20px;
        }
    </style>
    <div class="boxform-loreg position-relative">
        <div class=" w-50 m-auto top-50 start-50 position-absolute top-50 start-50 translate-middle">
            <form action="{{ route('processlogin') }}" method="post">
                @csrf
                <div class="d-flex justify-content-center mb-3">
                    <img src="{{ asset('image/logo2.png') }}" class="loreg-logo" alt="">
                </div>

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <div>{{session('error')}}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Email Input -->
                <div class="form-floating mb-4">
                    <div class="input-group d-flex justify-content-center">

                        <input type="text" class="loreg-input raleway" id="floatingInput"
                            style="max-width: 16vw; min-width: 16vw;" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="loreg-icon sf-3">
                            <i class="bi bi-person"></i>
                        </span>
                    </div>
                </div>

                <!-- Password Input -->
                <div class="form-floating mb-4">
                    <div class="input-group d-flex justify-content-center">
                        <input type="password" class="loreg-input raleway" id="passwordInput"
                            style="max-width: 16vw; min-width: 16vw;" placeholder="Password" name="password">
                        <span class="loreg-icon sf-3 show-password" onclick="togglePassword()">
                            <i id="eyeIcon" class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-dark mt-3 " style="width: 80%;">Sign In</button>
                </div>

                <div class="d-flex justify-content-center">
                    <p>Dont have an account? <a href="/register" style="text-decoration: none"> Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('passwordInput');
            var eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        }
    </script>
@endsection
