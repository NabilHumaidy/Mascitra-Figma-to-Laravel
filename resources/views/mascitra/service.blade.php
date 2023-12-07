@extends('layouts.app')

@section('title')
    Service
@endsection

@section('content')
    <div class="container col-xxl-8 px-4 py-5 mt-5 mb-5">
        <div>
            <p class="asap mb-1" style=" font-size: 24px; font-weight: 600;">Our</p>
            <p class="inter" style="font-size: 40px; font-weight: 700;">Service</p>
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
                    
                @endforeach
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

            </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="text-align: left">
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
                    
                @endforeach
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

            </div>
        </div>
    </div>
@endsection
