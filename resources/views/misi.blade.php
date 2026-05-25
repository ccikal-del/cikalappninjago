@extends('layouts.app')

@section('content')

<style>

/* WRAPPER */
.mission-wrap{
    padding:20px;
}

/* CARD STYLE */
.mission-box{
    background:white;
    border-radius:25px;
    padding:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

/* OBJECTIVE LIST */
.mission-box ul{
    padding-left:18px;
}

.mission-box li{
    margin-bottom:8px;
}

/* LOCATION */
.location-box{
    text-align:center;
    margin-top:30px;
}

/* NINJA INFO */
.ninja-circle{
    width:55px;
    height:55px;
    border-radius:50%;
}

/* BUTTON */
.btn-ninja{
    background:#007bff;
    color:white;
    font-weight:bold;
    border-radius:15px;
    width:100%;
}

.btn-ninja:hover{
    background:#005fd1;
    color:white;
}

/* DESKTOP */
@media (min-width:992px){

    .mission-wrap{
        max-width:750px;
        margin:auto;
    }

}

</style>

<div class="mission-wrap">

    <!-- BACK -->
    <a href="{{ route('dashboard') }}">
        <i class="bi bi-arrow-left fs-4 text-dark"></i>
    </a>

    <!-- TITLE -->
    <h2 class="fw-bold mt-3">
        Hi, Cika!
    </h2>

    <h5 class="fw-bold text-primary">
        MISSION: "Storm Override"
    </h5>

    <!-- OBJECTIVE -->
    <div class="mission-box mt-4">

        <h5 class="text-center fw-bold mb-3">
            Objective
        </h5>

        <ul>
            <li>Menghentikan mesin pencuri energi</li>
            <li>Mengalahkan musuh utama</li>
            <li>Mengembalikan kekuatan listrik kota</li>
        </ul>

    </div>

    <!-- LOCATION -->
    <div class="location-box">

        <h5 class="fw-bold">
            Location
        </h5>

        <p class="text-muted">
            Jalan kota (awal)
            <br>↓<br>
            Gedung listrik
            <br>↓<br>
            Sky Tower (boss fight)
        </p>

    </div>

    <!-- NINJA -->
    <div class="d-flex align-items-center mt-4 mission-box">

        <div class="ninja-circle bg-primary"></div>

        <div class="ms-3">
            <b>Blue Ninja</b><br>
            <small class="text-muted">
                Elemen: Petir (Lightning)
            </small>
        </div>

    </div>

    <!-- BUTTON -->
    <div class="mt-5">

        <a href="{{ route('dashboard') }}">
            <button class="btn btn-ninja py-3">
                Complete Mission
            </button>
        </a>

    </div>

</div>

@endsection