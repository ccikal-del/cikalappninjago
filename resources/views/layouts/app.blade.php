{{-- layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Ninjago App</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#eaf4ff;
            font-family:Arial,sans-serif;
        }

        a{
            text-decoration:none;
        }

        /* MAIN LAYOUT */

        .main-layout{
            display:flex;
            min-height:100vh;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            background:linear-gradient(180deg,#007bff,#0056b3);
            color:white;
            padding:30px 20px;
            position:fixed;
            top:0;
            left:0;
            height:100vh;
            overflow:auto;
        }

        .sidebar-title{
            font-size:28px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .sidebar-menu a{
            display:flex;
            align-items:center;
            gap:15px;
            color:white;
            padding:14px 18px;
            border-radius:15px;
            margin-bottom:10px;
            transition:0.2s;
            font-weight:600;
        }

        .sidebar-menu a:hover{
            background:rgba(255,255,255,0.15);
        }

        /* CONTENT */

        .main-content{
            flex:1;
            margin-left:260px;
            padding:30px;
            width:100%;
        }

        .content-card{
            background:white;
            border-radius:30px;
            padding:30px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        /* CARD */

        .menu-card{
            background:white;
            border-radius:25px;
            padding:25px;
            text-align:center;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            transition:0.2s;
            height:100%;
        }

        .menu-card:hover{
            transform:translateY(-5px);
        }

        /* BUTTON */

        .btn-ninja{
            background:#007bff;
            color:white;
            border:none;
            border-radius:50px;
            padding:14px;
            font-weight:bold;
            transition:0.2s;
        }

        .btn-ninja:hover{
            background:#0062cc;
            color:white;
        }

        /* NINJA */

        .ninja-item{
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:20px;
            background:white;
            border-radius:20px;
            box-shadow:0 5px 12px rgba(0,0,0,0.06);
            margin-bottom:20px;
            flex-wrap:wrap;
            gap:15px;
        }

        .ninja-left{
            display:flex;
            align-items:center;
        }

        .ninja-circle{
            width:65px;
            height:65px;
            border-radius:50%;
            flex-shrink:0;
        }

        /* STATUS */

        .online{
            background:#22c55e;
            color:white;
            padding:8px 15px;
            border-radius:20px;
            font-size:13px;
            font-weight:bold;
        }

        .offline{
            background:#ef4444;
            color:white;
            padding:8px 15px;
            border-radius:20px;
            font-size:13px;
            font-weight:bold;
        }

        /* MOBILE NAV */

        .mobile-nav{
            display:none;
        }

        /* TABLET */

        @media (max-width:992px){

            .sidebar{
                width:220px;
            }

            .main-content{
                margin-left:220px;
            }

        }

        /* MOBILE */

        @media (max-width:768px){

            .sidebar{
                display:none;
            }

            .main-content{
                margin-left:0;
                padding:20px;
                padding-bottom:100px;
            }

            .content-card{
                padding:20px;
                border-radius:20px;
            }

            .mobile-nav{
                position:fixed;
                bottom:0;
                left:0;
                width:100%;
                background:white;
                border-top:1px solid #ddd;
                display:flex;
                justify-content:space-around;
                align-items:center;
                padding:15px 10px;
                z-index:999;
            }

            .mobile-nav a{
                color:#007bff;
                font-size:24px;
            }

        }

    </style>

</head>
<body>

<div class="main-layout">

    <!-- SIDEBAR DESKTOP -->
    <div class="sidebar">

        <div class="sidebar-title">
            NINJAGO
        </div>

        <div class="sidebar-menu">

            <a href="{{ route('dashboard') }}">
                <i class="bi bi-house-fill"></i>
                Dashboard
            </a>

            <a href="{{ route('misi') }}">
                <i class="bi bi-lightning-fill"></i>
                Missions
            </a>

            <a href="#">
                <i class="bi bi-people-fill"></i>
                Ninjas
            </a>

            <a href="#">
                <i class="bi bi-gear-fill"></i>
                Settings
            </a>

            <a href="{{ route('login') }}">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>

        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="content-card">

            @yield('content')

        </div>

    </div>

</div>

<!-- MOBILE NAV -->
<div class="mobile-nav">

    <a href="{{ route('dashboard') }}">
        <i class="bi bi-house-fill"></i>
    </a>

    <a href="{{ route('misi') }}">
        <i class="bi bi-lightning-fill"></i>
    </a>

    <a href="#">
        <i class="bi bi-people-fill"></i>
    </a>

    <a href="#">
        <i class="bi bi-gear-fill"></i>
    </a>

</div>

</body>
</html>