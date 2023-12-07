@extends('layouts.dashboard')

@section('title')
    Order
@endsection

@section('active-order')
    active
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Order</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Order ID {{ $data->id }}</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-xxl-5 d-flex">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <h4 class="card-title">Name : {{ $data->name }}</h4>
                                                <h4 class="card-title">Company : {{ $data->company }}</h4>
                                                <h4 class="card-title">Email : {{ $data->email }}</h4>
                                                <h4 class="card-title">Phone : {{ $data->phone }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-7">
                                <div class="col-sm-12">
                                    <div class="card-body float-end">
                                        <h4 class="card-title">Created At : {{ $data->created_at }}</h4>
                                    </div>
                                </div>
                            </div>
                            <h1 class="card-title text-center">Message :</h1>
                            <div class=" d-flex justify-content-center">
                                <div class="card-body"><h1 class="card-title text-center">{{$data->message}}</h1></div>
                            </div>
                            <div class="col-xl-6 col-xxl-5 d-flex">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    What client have : 
                                                    <ul>
                                                        @php
                                                            $has = json_decode($data->has)
                                                        @endphp
                                                            @foreach ($has as $hass)
                                                            <li>
                                                                @if ($hass == 'uiux')
                                                                    UI / UX
                                                                @elseif ($hass == 'idea')
                                                                    Idea
                                                                @elseif ($hass == 'specification')
                                                                    Specification
                                                                @elseif ($hass == 'code')
                                                                    Code
                                                                @endif
                                                            </li>
                                                            @endforeach
                                                    </ul>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-7">
                                <div class="col-sm-12">
                                    <div class="card-body float-end">
                                        <h4 class="card-title">Budget : 
                                            @if ($data->budget == 'lessthen50')
                                                Less then Rp 50,000,000 | Less then $3,237
                                            @elseif ($data->budget == 'around50to150')
                                                More then Rp 50,000,000 to Rp 150,000,000 | More then $3,237 to $9,711
                                            @elseif ($data->budget == 'above150')
                                                More then Rp 150,000,000 | More then $9,711
                                            @endif
                                    </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
