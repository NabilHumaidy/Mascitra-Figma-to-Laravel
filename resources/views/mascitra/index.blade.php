@extends('layouts.loreg')

@section('title')
    Home
@endsection

@section('content')
    <div class="sectionheader mb-5">
        <svg class="circlehead" width="1440" height="722" viewBox="0 0 1440 722" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M-388 -324.5C-388 -46.9509 -271.265 219.23 -63.4744 415.487C144.316 611.744 426.14 722 720 722C1013.86 722 1295.68 611.744 1503.47 415.487C1711.26 219.231 1828 -46.9508 1828 -324.5L720 -324.5L-388 -324.5Z"
                fill="url(#paint0_linear_113_5045)" />
            <defs>
                <linearGradient id="paint0_linear_113_5045" x1="720" y1="722" x2="720" y2="-138.03"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFB287" stop-opacity="0.72" />
                    <stop offset="1" stop-color="#FFD1B8" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

        <div class="navbar">
            <header class="d-flex flex-wrap justify-content-center py-3 container fixed-top">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo">
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/" class="nav-link text-black">Home</a></li>
                    <li class="nav-item"><a href="javascript:void(0);" onclick="scrollToSection('aboutus')"
                            class="nav-link text-black">About Us</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-black">Project</a></li>
                    @if (Auth::guest())
                        <li class="nav-item"><a href="/login" class="nav-link text-black">Login</a></li>
                    @endif
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navunderline text-black" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if (Auth::user()->level == 'Admin')
                                    <li><a class="dropdown-item dropdownhover" href="/dashboard"><b>Dashboard</b></a></li>
                                @endif
                                <li><a class="dropdown-item dropdownhover" href="profile.php">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <a href="{{ route('logout') }}" class="dropdown-item dropdownredhover"
                                    id="logout">Logout</a>
                            </ul>
                        </li>
                    @endif
                </ul>
            </header>
        </div>
        <div class="px-4 py-5 my-5 text-center sectionheader-overlay">
            <p class="inter" style="font-size: 48px; color: black; font-weight: bolder;">Mascitra</p>
            <p class="poppins" style="font-weight: 400x; color: black;">Buat websitemu sendiri dengan bantuan kami.</p>
            <a href="javascript:void(0);" onclick="scrollToSection('order')" class="btn btnBuat mt-3 mb-5">Buat Sekarang</a>

            <object data="{{ asset('image/header.svg') }}" type="image/svg+xml" class="mb-5"></object>
        </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5 mt-5 mb-5" id="aboutus">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <object data="{{ asset('image/about.svg') }}" type="image/svg+xml"></object>
            </div>
            <div class="col-lg-6">
                <h1 class=" mb-3">Lorem ipsum dolor sit amet consectetur.</h1>
                <p class="roboto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quas sapiente nihil
                    impedit nostrum molestias! Sapiente nihil magnam ipsa voluptatum.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start ms-5">
                    <div class="me-5">
                        <p class="roboto" style="font-weight: 700; font-size: 48px;">+200</p>
                        <div class="orangebar mb-4"></div>
                        <p class="roboto" style="font-weight: 500; font-size: 24px;">EMPLOYEES</p>
                    </div>
                    <div class="me-5">
                        <p class="roboto" style="font-weight: 700; font-size: 48px;">+500</p>
                        <div class="orangebar mb-4"></div>
                        <p class="roboto" style="font-weight: 500; font-size: 24px;">PROJECTS</p>
                    </div>
                    <div class="">
                        <p class="roboto" style="font-weight: 700; font-size: 48px;">+300</p>
                        <div class="orangebar mb-4"></div>
                        <p class="roboto" style="font-weight: 500; font-size: 24px;">CLIENTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
        <p class="text-center roboto mb-4" style="font-size: 24px; font-weight: 700;">PORTOFOLIO</p>
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <!-- 8 images for Slide 1 -->
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto2.png') }}" class="d-block w-100" alt="Portofolio 2">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto3.png') }}" class="d-block w-100" alt="Portofolio 3">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto1.png') }}" class="d-block w-100" alt="Portofolio 1">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto4.png') }}" class="d-block w-100" alt="Portofolio 4">
                    </div>
                    <!-- Repeat for the next 7 images -->
                </div>
                <div class="row">
                    <!-- 8 images for Slide 1 -->
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto1.png') }}" class="d-block w-100" alt="Portofolio 1">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto4.png') }}" class="d-block w-100" alt="Portofolio 4">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto2.png') }}" class="d-block w-100" alt="Portofolio 2">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto3.png') }}" class="d-block w-100" alt="Portofolio 3">
                    </div>
                    <!-- Repeat for the next 7 images -->
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item active">
                <div class="row">
                    <!-- 8 images for Slide 1 -->
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto1.png') }}" class="d-block w-100" alt="Portofolio 1">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto4.png') }}" class="d-block w-100" alt="Portofolio 4">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto2.png') }}" class="d-block w-100" alt="Portofolio 2">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto3.png') }}" class="d-block w-100" alt="Portofolio 3">
                    </div>
                    <!-- Repeat for the next 7 images -->
                </div>
                <div class="row">
                    <!-- 8 images for Slide 1 -->
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto2.png') }}" class="d-block w-100" alt="Portofolio 2">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto3.png') }}" class="d-block w-100" alt="Portofolio 3">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto1.png') }}" class="d-block w-100" alt="Portofolio 1">
                    </div>
                    <div class="canvasporto col-md-3">
                        <img src="{{ asset('image/porto4.png') }}" class="d-block w-100" alt="Portofolio 4">
                    </div>
                    <!-- Repeat for the next 7 images -->
                </div>
            </div>

            <!-- Repeat the structure for additional slides -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <img src="{{ asset('image/portoleft.svg') }}" aria-hidden="true">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <img src="{{ asset('image/portoright.svg') }}" aria-hidden="true">
        </button>
    </div>

    <div class="container col-xxl-8 px-4 py-5 mt-5 text-center mb-5">
        <div>
            <p class="asap mb-2" style="color: #A7ABB6; font-size: 16px;">Our</p>
            <p class="inter mb-2" style="font-size: 40px; font-weight: 700;">Service</p>
            <p class="asap" style="color: #A7ABB6; font-size: 16px;">Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Qui, velit atque. Aut itaque est sunt?</p>
        </div>
        <div class="row flex-lg-row align-items-center g-5 py-5" style="text-align: left">
            <div class="col-10 col-sm-8 col-lg-6">
                {{-- Kesatu --}}
                @foreach ($serviceWebsite as $website)
                    <a href="/service/{{$website->id}}" class="card">
                        <img class="serviceimageirmary card-img" src="{{ asset('image/' . $website->gambar) }}"
                            alt="">
                        <div class="card-img-overlay text-white">
                            <p class="mb-5">&nbsp;</p>
                            <p class="mb-5">&nbsp;</p>
                            <p class="mb-5">&nbsp;</p>
                            <p class="mb-5">&nbsp;</p>
                            <h5 class="card-title mt-5 poppins" style="font-weight: 700; font-size: 25px;">
                                {{ $website->title }}</h5>
                            <p class="card-text">{{ Str::limit($website->description, 100) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-lg-6">
                {{-- Kedua --}}
                @foreach ($serviceAndroid as $android)
                    <a href="/service/{{$android->id}}" class="card">
                        <img class="serviceimagesecond card-img" src="{{ asset('image/' . $android->gambar) }}"
                            alt="">
                        <div class="card-img-overlay text-white">
                            <p class="mb-3">&nbsp;</p>
                            <p class="mb-3">&nbsp;</p>
                            <h5 class="card-title mt-5 poppins" style="font-weight: 700; font-size: 25px;">
                                {{ $android->title }}</h5>
                            <p class="card-text">{{ Str::limit($android->description, 100) }}</p>
                        </div>
                    </a>
                @endforeach
                <br>
                {{-- Ketiga --}}

                @foreach ($serviceUIUX as $uiux)
                    <a href="/service/{{$uiux->id}}" class="card">
                        <img class=" serviceimagesecond card-img" src="{{ asset('image/' . $uiux->gambar) }}"
                            alt="">
                        <div class="card-img-overlay text-white">
                            <p class="mb-3">&nbsp;</p>
                            <p class="mb-3">&nbsp;</p>
                            <h5 class="card-title mt-5 poppins" style="font-weight: 700; font-size: 25px;">
                                {{ $uiux->title }}</h5>
                            <p class="card-text">{{ Str::limit($uiux->description, 100) }}</p>
                        </div>
                    </a>
                @endforeach
                

            </div>
        </div>
        <a href="/service" class="btn btnService">View Our Services</a>
    </div>

    <div class="text-center mb-5">
        <h2 class="roboto">Our Customers</h2>
        <div class="mb-5" style="background-color: #F3F3F3">
            <div class="py-3 d-flex gap-3 justify-content-center">
                <img src="{{ asset('image/poltek.png') }}" style="width: auto;" alt="poltek">
                <img src="{{ asset('image/telkom.png') }}" style="width: auto;" alt="telkom indonesia">
                <img src="{{ asset('image/bi.png') }}" style="width: auto;" alt="bank indonesia">
                <img src="{{ asset('image/bankjatim.png') }}" style="width: auto;" alt="bank jatim">
                <img src="{{ asset('image/unej.png') }}" style="width: auto;" alt="unej">
                <img src="{{ asset('image/telkomuni.png') }}" style="width: auto;" alt="telkom universitas">
            </div>
        </div>
    </div>
    <br><br><br>


    <div class="container col-xxl-8 px-4 mt-5 orderSelection" id="order">
        <div class="row flex-lg-row-reverse align-items-center g-5">
            <div class="col-10 col-sm-8 col-lg-3 mb-5">
                <button type="button" class="orderBtn roboto" id="orderBtn"
                    style="font-size: 14px; font-weight: 600; color: #FF6422; padding: 15px 60px;">ORDER
                    NOW <svg class="ms-3" width="18" height="21" viewBox="0 0 18 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.0236816 20.952L17.5116 10.7761L0.0236816 0.600098V8.51471L12.5511 10.7761L0.0236816 13.0374V20.952Z"
                            fill="#FF6422" />
                    </svg></object></button>
            </div>
            <div class="col-lg-9">
                <div class="ms-5 mb-5">
                    <h1 class="">Ready to get started?</h1>
                    <p class="roboto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ad.</p>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <footer class="mt-5">
            <div class="row">
                <div class="col mb-3">
                    <p class="lato" style="font-weight: 900; font-size: 22px;">Mascitra</p>
                    <p class="satoshi" style="color: #A7ABB6; font-size: 16px;">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Nihil ad animi mollitia voluptates eaque vero.</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">Home</p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Beranda</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Program Keahlian</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Gallery</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Our News</a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">About</p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Beranda</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Program Keahlian</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Gallery</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"
                                style="color: #A7ABB6;">Our News</a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <p class="satoshi" style="font-weight: 700; font-size: 16px;">Contact</p>
                    <ul class="nav flex-column">
                        <div class="d-flex gap-3">
                            <i class="bi bi-telephone-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="tel:405-555-0120" class="nav-link p-0 asap"> <span
                                        style="color: #A7ABB6;">(406) 555-0120</span></a>
                            </li>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-envelope-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="mailto:kreasi.digital@gmail.com"
                                    class="nav-link p-0 asap"> <span
                                        style="color: #A7ABB6;">kreasi.digital@gmail.com</span></a>
                            </li>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-geo-alt-fill text-black"></i>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 asap"> <span
                                        style="color: #A7ABB6;">29722 Westheimer Rd. Santa Ana, Illinois 85486</span></a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between">
                <ul class="list-unstyled d-flex">
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i
                                class="bi bi-instagram"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i
                                class="bi bi-whatsapp"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i
                                class="bi bi-youtube"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i
                                class="bi bi-linkedin"></i></a></li>
                    <li class="me-4"><a class="link-body-emphasis fs-5" href="#"><i
                                class="bi bi-twitter"></i></a></li>
                </ul>
                <p class="py-4 my-4 jakartasans" style="font-size: 14px; color: #A7ABB6;">&copy; 2022 Mangcoding. All
                    rights reserved.</p>
            </div>
        </footer>
    </div>

    <div class="modal fade p-4 py-md-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" id="orderModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-4 shadow">
                <form>
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-4 mb-2">Hire Us</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0 mb-4">
                        <div class="row">
                            <h1 class="modal-title fs-5 mb-3">How we can contact you back?</h1>
                            <div class="col-12 mb-2">
                                <label for="name" class="form-label">Name</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" name="name" id="name" placeholder=""
                                    value="{{ old('name') }}">
                                <div class="invalid-feedback d-block" id="name-error"></div>

                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}">
                                <div class="invalid-feedback d-block" id="email-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" name="phone" id="phone" class="phone"
                                    value="{{ old('phone') }}">
                                <div class="invalid-feedback d-block" id="phone-error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <h1 class="modal-title fs-5">Your budget <span class="text-danger">*</span></h1>
                        <div class="d-flex flex-column flex-md-row p-4 gap-4 align-items-center justify-content-center">
                            <div class="list-group list-group-checkable d-grid gap-2 border-0">
                                <input class="list-group-item-check pe-none" type="radio" name="budget"
                                    id="lessthen50" value="lessthen50">
                                <label class="list-group-item rounded-3 py-3" for="lessthen50">
                                    Less then Rp 50,000,000
                                    <span class="d-block small opacity-50">Less then $3,237</span>
                                </label>

                                <input class="list-group-item-check pe-none" type="radio" name="budget"
                                    id="around50to150" value="around50to150">
                                <label class="list-group-item rounded-3 py-3" for="around50to150">
                                    More then Rp 50,000,000 to Rp 150,000,000
                                    <span class="d-block small opacity-50">More then $3,237 to $9,711</span>
                                </label>

                                <input class="list-group-item-check pe-none" type="radio" name="budget"
                                    id="above150" value="above150">
                                <label class="list-group-item rounded-3 py-3" for="above150">
                                    More then Rp 150,000,000
                                    <span class="d-block small opacity-50">More then $9,711</span>
                                </label>
                                <div class="invalid-feedback d-block" id="budget-error"></div>

                                {{-- <input class="list-group-item-check pe-none" type="radio"
                                    name="listGroupCheckableRadios" id="listGroupCheckableRadios4" value=""
                                    disabled>
                                <label class="list-group-item rounded-3 py-3" for="listGroupCheckableRadios4">
                                    Fourth disabled radio
                                    <span class="d-block small opacity-50">This option is disabled</span>
                                </label> --}}
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <h1 class="modal-title fs-5">You already have</h1>
                        <small class="d-block text-body-secondary">pick as many as you want</small>
                        <div class="d-flex flex-column flex-md-row p-4 gap-4 align-items-center justify-content-center">
                            <div class="list-group">
                                <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" name="has[]"
                                        value="uiux" name="has[]">
                                    <span>
                                        UI / UX
                                    </span>
                                </label>
                                <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" name="has[]"
                                        value="idea" name="has[]">
                                    <span>
                                        Idea
                                </label>
                                <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" name="has[]"
                                        value="specification" name="has[]">
                                    <span>
                                        Specification
                                    </span>
                                </label>
                                <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" name="has[]"
                                        value="code" name="has[]">
                                    <span>
                                        Code
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body py-0 mb-4">
                        <div class="row">
                            <h1 class="modal-title fs-5 mb-3">Final step</h1>
                            <div class="col-12 mb-2">
                                <label for="inputName" class="form-label">Company Name</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" id="company" name="company" placeholder=""
                                    value="{{ old('company') }}">
                                <div class="invalid-feedback d-block" id="company-error"></div>

                            </div>
                            <div class="col-12 mb-2">
                                <label for="inputEmail" class="form-label">How you know us?</label><span
                                    class="text-danger">
                                    *</span>
                                <select name="survey" id="survey" class="form-select">
                                    <option value="Google">Google</option>
                                    <option value="Ads">Ads</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback d-block" id="survey-error"></div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="message" class="form-label">Message</label><span class="text-danger">
                                    *</span>
                                <textarea name="message" id="message" class="form-control" cols="30" rows="10">{{ old('message') }}</textarea>
                                <div class="invalid-feedback d-block" id="message-error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                        <button type="button" id="saveOrderBtn" class="btn btn-lg btn-primary">Send</button>
                        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endsection
