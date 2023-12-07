@extends('layouts.loreg')

@section('title')
    Register
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
            <form action="{{route('processregister')}}" method="post">
                @csrf
                <div class="d-flex justify-content-center mb-3">
                    <img src="{{ asset('image/logo2.png') }}" class="loreg-logo" alt="">
                </div>

                <!-- Email Input -->
                <div class="form-floating mb-4">
                    <div class="input-group d-flex justify-content-center">
                        <input type="text" class="loreg-input raleway" id="floatingInput" style="max-width: 16vw; min-width: 16vw;" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="loreg-icon sf-3">
                            <i class="bi bi-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                        <div class="invalid-feedback d-block justify-content-center d-flex">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <!-- Nama Input -->
                <div class="form-floating mb-4">
                    <div class="input-group d-flex justify-content-center">
                        <input type="text" class="loreg-input raleway" id="floatingInput" style="max-width: 16vw; min-width: 16vw;" placeholder="Full Name" name="nama" value="{{old('nama')}}">
                        <span class="loreg-icon sf-3">
                            <i class="bi bi-person"></i>
                        </span>
                    </div>
                    @error('nama')
                        <div class="invalid-feedback d-block justify-content-center d-flex">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-floating mb-4" >
                    <div class="input-group d-flex justify-content-center" >
                        <input type="password" class="loreg-input raleway" id="password" style="max-width: 16vw; min-width: 16vw;" placeholder="Password" name="password" value="{{old('password')}}">
                        <span class="loreg-icon sf-3 show-password" onclick="togglePassword()">
                            <i id="eyeIconPassword" class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                    @error('password')
                            <div class="invalid-feedback d-block justify-content-center d-flex">
                                {{$message}}
                            </div>
                    @enderror
                </div>

                <div class="form-floating mb-4" >
                    <div class="input-group d-flex justify-content-center" >
                        <input type="password" class="loreg-input raleway" id="password_confirmation" name="password_confirmation" style="max-width: 16vw; min-width: 16vw;" placeholder="Confirm Password">
                        <span class="loreg-icon sf-3 show-password" onclick="toggleVerifiedPassword()">
                            <i id="eyeIconConfirmation" class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-dark mt-3 " onclick="validatePassword()" style="width: 80%;">Sign Up</button>
                </div>

                <div class="d-flex justify-content-center">
                    <p>Already have an account? <a href="/login" style="text-decoration: none"> Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eyeIconPassword');
    
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

        function toggleVerifiedPassword() {
            var passwordInput = document.getElementById('password_confirmation');
            var eyeIcon = document.getElementById('eyeIconConfirmation');
    
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

        // function validatePassword() {
        //     var password = document.getElementById('passwordInput').value;
        //     var confirmPassword = document.getElementById('confirmPassword').value;

        //     if (password === confirmPassword) {
        //         alert('Password matched!'); // Gantilah dengan logika atau tindakan yang sesuai
        //     } else {
        //         alert('Password does not match. Please try again.'); // Gantilah dengan logika atau tindakan yang sesuai
        //     }
        // }
    </script>
@endsection
