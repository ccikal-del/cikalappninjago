@extends('layouts.app')

@section('content')

<style>

/* WRAPPER SAFE RESPONSIVE */
.welcome-wrap{
    min-height:calc(100vh - 60px);
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:40px 25px;
}

/* TOP SECTION */
.welcome-top{
    text-align:center;
    margin-top:60px;
}

/* IMAGE */
.welcome-img{
    width:170px;
    max-width:60%;
    height:auto;
}

/* TITLE */
.welcome-title{
    letter-spacing:2px;
    line-height:1.3;
    font-weight:bold;
    margin-top:20px;
}

/* BUTTON STYLE */
.btn-ninja{
    background:#007bff;
    color:white;
    font-weight:bold;
    border-radius:50px;
}

.btn-ninja:hover{
    background:#005fd1;
    color:white;
}

/* DESKTOP CENTER CARD */
@media (min-width:992px){

    .welcome-wrap{
        max-width:450px;
        margin:auto;
        background:white;
        border-radius:25px;
        box-shadow:0 0 25px rgba(0,0,0,0.08);
    }

    .welcome-top{
        margin-top:20px;
    }
}

</style>

<div class="welcome-wrap">

    <!-- TOP -->
    <div class="welcome-top">

        <img src="{{ asset('assets/images/welcomeninjago.jpg') }}"
             alt="Ninjago Welcome"
             class="welcome-img">

        <h2 class="welcome-title">
            WELCOME TO <br>
            NINJAGO APP
        </h2>

    </div>

    <!-- BOTTOM -->
    <div>

        <a href="{{ route('dashboard') }}" class="text-decoration-none">
            <button class="btn btn-ninja w-100 py-2 mb-3">
                Get Started
            </button>
        </a>

        <a href="{{ route('login') }}" class="text-decoration-none">
            <button class="btn btn-outline-primary w-100 py-2 rounded-pill">
                Login
            </button>
        </a>

        <p class="text-center mt-4 text-primary fw-semibold">
            Learn More
        </p>

    </div>

</div>

@endsection