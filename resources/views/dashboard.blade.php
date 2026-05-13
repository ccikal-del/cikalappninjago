@extends('layouts.app')

@section('content')

<div class="p-4">

    <a href="{{ route('login') }}">
        <i class="bi bi-arrow-left fs-4 text-dark"></i>
    </a>

    <h2 class="fw-bold mt-3">
        Dashboard
    </h2>

    <div class="top-bg">

    <div class="row g-3 mt-2">

        <div class="col-6">
            <div class="menu-card">
                <i class="bi bi-droplet-fill text-primary fs-2"></i>
                <p class="fw-bold mt-2">Elemental</p>
            </div>
        </div>

        <div class="col-6">
            <div class="menu-card">
                <i class="bi bi-shield-fill text-warning fs-2"></i>
                <p class="fw-bold mt-2">Master</p>
            </div>
        </div>

        <div class="col-6">

            <a href="{{ route('misi') }}"
               class="text-decoration-none text-dark">

                <div class="menu-card">

                    <p class="fw-bold">
                        Missions
                    </p>
                    <h3>4</h3>

                </div>

            </a>


        </div>

        <div class="col-6">
            <div class="menu-card">
                <p class="fw-bold">Complete</p>
                <h3>106</h3>
            </div>
        </div>

    </div>

</div>

<div class="p-3">

    <h4 class="fw-bold">
        Elemental Of Ninja
    </h4>

        <div class="d-flex align-items-center mt-4">

        <div class="ninja-circle bg-danger"></div>

        <div class="ms-3">
            <b>Red Ninja</b><br>
            <small>Elemen: Api</small>
        </div>

    </div>

    <hr>

    <div class="d-flex align-items-center">

        <div class="ninja-circle bg-success"></div>

        <div class="ms-3">
            <b>Green Ninja</b><br>
            <small>Elemen: Energy</small>
        </div>

    </div>

    <hr>

    <div class="d-flex align-items-center">

        <div class="ninja-circle bg-primary"></div>

        <div class="ms-3">
            <b>Blue Ninja</b><br>
            <small>Elemen: Lightning</small>
        </div>

    </div>

</div>

<div class="bottom-nav text-center">

    <i class="bi bi-house-fill fs-4 mx-3"></i>
    <i class="bi bi-person-fill fs-4 mx-3"></i>
    <i class="bi bi-card-list fs-4 mx-3"></i>
    <i class="bi bi-gear-fill fs-4 mx-3"></i>

</div>

@endsection