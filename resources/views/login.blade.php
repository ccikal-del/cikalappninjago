@extends('layouts.app')

@section('content')

<style>

/* LOGIN WRAPPER RESPONSIVE SAFE */
.login-wrapper{
    min-height:calc(100vh - 60px);
    display:flex;
    flex-direction:column;
    padding:30px 25px;
}

/* HERO IMAGE */
.ninja-hero-img{
    width:140px;
    max-width:60%;
    height:auto;
    object-fit:contain;
}

/* FORM STYLE IMPROVE */
.form-control{
    border:1px solid #ddd;
}

.form-control:focus{
    box-shadow:none;
    border-color:#007bff;
}

/* BUTTON STYLE */
.btn-ninja{
    background:#007bff;
    color:white;
    font-weight:bold;
}

.btn-ninja:hover{
    background:#005fd1;
    color:white;
}

/* FOOTER TEXT */
.login-footer{
    margin-top:auto;
    text-align:center;
    padding-top:20px;
}

/* DESKTOP CENTER CARD FEEL */
@media (min-width:992px){

    .login-wrapper{
        max-width:450px;
        margin:auto;
        background:white;
        border-radius:25px;
        box-shadow:0 0 25px rgba(0,0,0,0.08);
    }

}

</style>

<div class="login-wrapper">

    <!-- BACK -->
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
             class="ninja-hero-img">

    </div>

    <!-- ERROR -->
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- FORM -->
    <form action="{{ route('login.process') }}" method="POST">

        @csrf

        <label class="fw-semibold mb-1">Email</label>

        <input type="email"
               name="email"
               class="form-control rounded-pill mb-3 py-2"
               placeholder="input email">

        <label class="fw-semibold mb-1">Password</label>

        <input type="password"
               name="password"
               class="form-control rounded-pill py-2"
               placeholder="password">

        <div class="text-end mt-1">
            <small class="fw-semibold text-primary">
                Forgot Password
            </small>
        </div>

        <button type="submit"
                class="btn btn-ninja w-100 py-2 rounded-pill mt-4">
            Login
        </button>

    </form>

    <!-- FOOTER -->
    <div class="login-footer">

        <small>
            Don't have an account?
            <b>Sign Up</b>
        </small>

    </div>

</div>

@endsection