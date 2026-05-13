@extends('layouts.app')

@section('content')

<div class="p-4">

    <a href="{{ route('dashboard') }}">
        <i class="bi bi-arrow-left fs-4 text-dark"></i>
    </a>

    <h2 class="fw-bold mt-3">
        Hi, Cika!
    </h2>

    <h5 class="fw-bold">
        MISSION:
        "Storm Override"
    </h5>

    <div class="border border-2 border-primary rounded-4 p-3 mt-4">

        <h5 class="text-center fw-bold">
            Objective
        </h5>

        <ul>
            <li>Menghentikan mesin pencuri energi</li>
            <li>Mengalahkan musuh utama</li>
            <li>Mengembalikan kekuatan listrik kota</li>
        </ul>

    </div>

    <div class="text-center mt-5">

        <h5 class="fw-bold">
            Location
        </h5>

        <p>
            Jalan kota (awal)
            <br>↓<br>
            Gedung listrik
            <br>↓<br>
            Sky Tower (boss fight)
        </p>

    </div>

    <div class="d-flex align-items-center mt-5">

        <div class="ninja-circle bg-primary"></div>

        <div class="ms-3">

            <b>Blue Ninja</b><br>

            <small>
                Elemen: Petir (Lightning)
            </small>

        </div>

    </div>

    <a href="{{ route('dashboard') }}">

        <button class="btn btn-ninja py-2 mt-5">

            Complete Missions

        </button>

    </a>

</div>

@endsection