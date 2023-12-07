@extends('layouts.app')

@section('title')
    Service {{$data->title}}
@endsection

@section('content')
    <div class="container col-xxl-8 px-4 py-5 mt-5 mb-5">
        <div class="row flex-lg-row-reverse align-items-center g-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('image/'.$data->gambar) }}" alt="">
            </div>
            <div class="col-lg-6">
                <p class="poppins400" style="font-size: 24px; font-weight: 500;">{{$data->title}}</p>
                <p class="asap" style="font-size: 16px;" >{{$data->description}}</p>
            </div>
        </div>
    </div>
@endsection
