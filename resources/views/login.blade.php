@extends('layouts.app')

@section('content')

<div class="d-flex flex-column"
     style="height:100vh; padding:30px 25px;">

    <!-- BACK BUTTON -->
    <a href="/" class="text-dark">
        <i class="bi bi-arrow-left fs-4"></i>
    </a>

    <!-- TITLE -->
    <h2 class="fw-bold mt-3">
        Login
    </h2>

    <!-- IMAGE -->
    <div class="text-center mt-4 mb-4">

        <img src="{{ asset('assets/images/loginpage.png') }}"
             alt="Ninjago Login"
             class="ninja-hero-img"
             style="
                width:140px;
                height:auto;
                object-fit:contain;
             ">





    </div>

    <!-- FORM -->
    <form action="{{ route('dashboard') }}"
          method="GET">

        <label class="fw-semibold mb-1">
            Email
        </label>

        <input type="email"
               class="form-control rounded-pill mb-3 py-2"
               placeholder="input email">

        <label class="fw-semibold mb-1">
            Password
        </label>

        <input type="password"
               class="form-control rounded-pill py-2"
               placeholder="password">

        <div class="text-end mt-1">
            <small class="fw-semibold">
                Forgot Password
            </small>
        </div>

        <button type="submit"
                class="btn btn-ninja w-100 py-2 rounded-pill mt-4">
            Login
        </button>

    </form>

    <!-- BOTTOM TEXT -->
    <div class="text-center mt-auto mb-2">

        <small>
            Don't have an account?
            <b>Sign Up</b>
        </small>

    </div>

</div>

@endsection