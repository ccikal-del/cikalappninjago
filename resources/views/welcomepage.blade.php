@extends('layouts.app')

@section('content')

<div class="d-flex flex-column align-items-center justify-content-between"
     style="height:100vh; padding:40px 25px;">

    <!-- TOP CONTENT -->
    <div class="text-center" style="margin-top:120px;">

        <img src="{{ asset('assets/images/welcomeninjago.jpg') }}"
             alt="Ninjago Welcome"
             class="img-fluid"
             style="width:170px;">




        <h2 class="fw-bold mt-4"
            style="letter-spacing:2px; line-height:1.3;">
            WELCOME TO <br>
            NINJAGO APP
        </h2>

    </div>

    <!-- BOTTOM BUTTON -->
    <div class="w-100">

        <a href="{{ route('dashboard') }}"
           class="text-decoration-none">

            <button class="btn btn-ninja w-100 py-2 rounded-pill mb-3">
                Get Started
            </button>

        </a>

        <a href="{{ route('login') }}"
           class="text-decoration-none">

            <button class="btn btn-outline-primary w-100 rounded-pill py-2">
                Login
            </button>

        </a>

        <p class="text-center mt-4 text-primary fw-semibold">
            Learn More
        </p>

    </div>

</div>

@endsection