<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>@yield('title') | Mascitra</title>
</head>

<body>
    <div class="navbar">
        <header class="d-flex flex-wrap justify-content-center py-3 container fixed-top">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ asset('image/logo.png') }}" alt="Logo">
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link text-black">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link text-black">About Us</a></li>
                <li class="nav-item"><a href="" class="nav-link text-black">Project</a></li>
                @if (Auth::guest())
                    <li class="nav-item"><a href="/login" class="nav-link text-black">Login</a></li>
                @endif
                @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navunderline text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @if (Auth::user()->level == 'Admin')
                        <li><a class="dropdown-item dropdownhover" href="/dashboard"><b>Dashboard</b></a></li>
                        @endif
                        <li><a class="dropdown-item dropdownhover" href="profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <a href="{{route('logout')}}" class="dropdown-item dropdownredhover" id="logout">Logout</a>
                    </ul>
                </li>
                @endif
            </ul>
        </header>
    </div>

    @yield('content')

    <div class="container">
        <footer class="mt-5">
            <div class="row">
                <div class="col mb-3">
                    <p class="lato" style="font-weight: 900; font-size: 22px;">Mascitra</p>
                    <p class="satoshi" style="color: #A7ABB6; font-size: 16px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ad animi mollitia voluptates eaque vero.</p>
                </div>
    
                <div class="col mb-3">
    
                </div>
    
                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">Home</p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Beranda</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Program Keahlian</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Gallery</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Our News</a>
                        </li>
                    </ul>
                </div>
    
                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">About</p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Beranda</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Program Keahlian</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Gallery</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap" style="color: #A7ABB6;">Our News</a>
                        </li>
                    </ul>
                </div>
    
                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">Contact</p>
                    <ul class="nav flex-column">
                        <div class="d-flex gap-3">
                            <i class="bi bi-telephone-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="tel:405-555-0120" class="nav-link p-0 asap"> <span style="color: #A7ABB6;">(406) 555-0120</span></a>
                            </li>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-envelope-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="mailto:kreasi.digital@gmail.com" class="nav-link p-0 asap"> <span style="color: #A7ABB6;">kreasi.digital@gmail.com</span></a>
                            </li>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-geo-alt-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"> <span style="color: #A7ABB6;">29722 Westheimer Rd. Santa Ana, Illinois 85486</span></a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between">
                <ul class="list-unstyled d-flex">
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i class="bi bi-whatsapp"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i class="bi bi-youtube"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i class="bi bi-twitter"></i></a></li>
                </ul>
                <p class="py-4 my-4 jakartasans" style="font-size: 14px; color: #A7ABB6;">&copy; 2022 Mangcoding. All rights reserved.</p>
            </div>
        </footer>
    </div>


    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>


    <script>
        $(document).ready(function() {
            var navbar = $('.navbar');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 125) {
                    navbar.addClass('scrolled');
                } else {
                    navbar.removeClass('scrolled');
                }
            });
        });

        @if(session('success'))
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success",
                timer: 5000
            });
        @endif

        $(document).on('click', '#logout' , function(e){
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: "Yakin ingin logout?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Logout!"
            }).then((result) => {
                if (result.isConfirmed) {
                    location = link
                    Swal.fire({
                    title: "Logout!",
                    text: "Berhasil logout.",
                    icon: "success"
                    });
                }
            });
        })

        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

    </script>
</body>

</html>
