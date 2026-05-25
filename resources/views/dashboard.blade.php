@extends('layouts.app')

@section('content')

<style>

/* SAFE LOCAL STYLES (biar tidak bentrok layout lain) */

.top-bg{
    background:linear-gradient(135deg,#4da6ff,#007bff);
    padding:20px;
    border-radius:20px;
    color:white;
}

.menu-card{
    background:white;
    border-radius:20px;
    padding:20px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    transition:0.2s;
    height:100%;
}

.menu-card:hover{
    transform:translateY(-4px);
}

.ninja-circle{
    width:50px;
    height:50px;
    border-radius:50%;
}

.bottom-nav{
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    background:white;
    border-top:1px solid #ddd;
    display:flex;
    justify-content:center;
    padding:12px 0;
    gap:40px;
    z-index:999;
}

/* DESKTOP */
@media (min-width:992px){

    .bottom-nav{
        max-width:900px;
        left:50%;
        transform:translateX(-50%);
        border-radius:20px 20px 0 0;
    }

}

</style>

<div class="p-2 p-md-4">

    <!-- BACK -->
    <a href="{{ route('login') }}">
        <i class="bi bi-arrow-left fs-4 text-dark"></i>
    </a>

    <h2 class="fw-bold mt-3">
        Dashboard
    </h2>

    <!-- TOP SECTION -->
    <div class="top-bg mt-3">

        <div class="row g-3">

            <div class="col-6">
                <div class="menu-card">
                    <i class="bi bi-droplet-fill text-primary fs-2"></i>
                    <p class="fw-bold mt-2 text-dark">Elemental</p>
                </div>
            </div>

            <div class="col-6">
                <div class="menu-card">
                    <i class="bi bi-shield-fill text-warning fs-2"></i>
                    <p class="fw-bold mt-2 text-dark">Master</p>
                </div>
            </div>

            <div class="col-6">
                <a href="{{ route('misi') }}" class="text-decoration-none">
                    <div class="menu-card">
                        <p class="fw-bold text-dark">Missions</p>
                        <h3 class="text-primary">4</h3>
                    </div>
                </a>
            </div>

            <div class="col-6">
                <div class="menu-card">
                    <p class="fw-bold text-dark">Complete</p>
                    <h3 class="text-success">106</h3>
                </div>
            </div>

        </div>

    </div>

    <!-- NINJA LIST -->
    <div class="mt-4">

        <h4 class="fw-bold">
            Elemental Of Ninja
        </h4>

        <div class="d-flex align-items-center mt-4">

            <div class="ninja-circle bg-danger"></div>

            <div class="ms-3">
                <b>Red Ninja</b><br>
                <small class="text-muted">Elemen: Api</small>
            </div>

        </div>

        <hr>

        <div class="d-flex align-items-center">

            <div class="ninja-circle bg-success"></div>

            <div class="ms-3">
                <b>Green Ninja</b><br>
                <small class="text-muted">Elemen: Energy</small>
            </div>

        </div>

        <hr>

        <div class="d-flex align-items-center">

            <div class="ninja-circle bg-primary"></div>

            <div class="ms-3">
                <b>Blue Ninja</b><br>
                <small class="text-muted">Elemen: Lightning</small>
            </div>

        </div>

    </div>

</div>

<!-- BOTTOM NAV -->
<div class="bottom-nav">

    <i class="bi bi-house-fill fs-4"></i>
    <i class="bi bi-person-fill fs-4"></i>
    <i class="bi bi-card-list fs-4"></i>
    <i class="bi bi-gear-fill fs-4"></i>

</div>

@endsection