<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#eaf4ff;
            font-family:Arial;
            display:flex;
            justify-content:center;
            align-items:flex-start;
            min-height:100vh;
            margin:0;
            padding:20px;
        }

        /* MAIN CONTAINER */
        .phone{
            width:100%;
            max-width:420px;
            min-height:100vh;
            background:white;
            position:relative;
            overflow:hidden;
            border-radius:25px;
            box-shadow:0 0 25px rgba(0,0,0,0.1);
        }

        /* TOP BAR */
        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 20px;
        }

        .logout-btn{
            background:#007bff;
            color:white;
            padding:8px 18px;
            border-radius:12px;
            text-decoration:none;
            font-weight:bold;
        }

        .logout-btn:hover{
            background:#0062cc;
            color:white;
        }

        /* HEADER */
        .header{
            background:linear-gradient(135deg,#4da6ff,#007bff);
            padding:30px 20px;
            border-bottom-left-radius:35px;
            border-bottom-right-radius:35px;
            color:white;
        }

        .master-img{
            width:80px;
            height:80px;
            border-radius:50%;
            border:4px solid white;
            object-fit:cover;
        }

        /* CARD */
        .card-box{
            background:white;
            border-radius:25px;
            padding:20px;
            margin-top:20px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        }

        /* MENU */
        .menu-card{
            background:linear-gradient(135deg,#4da6ff,#007bff);
            border-radius:25px;
            padding:20px;
            text-align:center;
            color:white;
            font-weight:bold;
            height:130px;
            box-shadow:0 5px 10px rgba(0,123,255,0.2);
            transition:0.2s;
        }

        .menu-card:hover{
            transform:scale(1.03);
        }

        .menu-card h1{
            font-size:35px;
        }

        /* BUTTON */
        .btn-blue{
            background:#007bff;
            color:white;
            border:none;
            border-radius:15px;
            padding:12px;
            font-weight:bold;
            width:100%;
        }

        .btn-light-custom{
            background:#eef5ff;
            color:#007bff;
            border:none;
            border-radius:15px;
            padding:12px;
            width:100%;
            margin-top:10px;
            font-weight:bold;
        }

        /* NAVBAR */
        .bottom-nav{
            position:fixed;
            bottom:0;
            width:100%;
            max-width:420px;
            left:50%;
            transform:translateX(-50%);
            background:white;
            display:flex;
            justify-content:space-around;
            padding:15px 0;
            border-top:1px solid #ddd;
        }

        .nav-item{
            text-align:center;
            color:#007bff;
            font-size:14px;
            font-weight:bold;
        }

        /* DESKTOP RESPONSIVE */
        @media (min-width: 992px){

            body{
                justify-content:center;
                padding:40px;
            }

            .phone{
                max-width:900px;
            }

            .bottom-nav{
                max-width:900px;
            }

            .row .col-6{
                flex:0 0 25%;
                max-width:25%;
            }
        }

    </style>

</head>

<body>

<div class="phone">

    <!-- TOP BAR -->
    <div class="topbar">

        <h5 class="fw-bold text-primary mb-0">
            MASTER PANEL
        </h5>

        <a href="/logout" class="logout-btn">
            Logout
        </a>

    </div>

    <!-- HEADER -->
    <div class="header">

        <div class="d-flex align-items-center">

            <img src="https://i.pinimg.com/736x/63/f7/51/63f751d5980bc15f85d08879b5f9bb1f.jpg"
            class="master-img">

            <div class="ms-3">

                <h3 class="fw-bold mb-0">Master Wu</h3>
                <small>Ninja Academy Master</small>

            </div>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="p-3 pb-5">

        <!-- WELCOME -->
        <div class="card-box">

            <h4 class="text-primary fw-bold">Welcome Back Master</h4>

            <p class="text-muted mb-0">
                Monitor all ninja activities and missions.
            </p>

        </div>

        <!-- MENU -->
        <div class="row mt-3">

            <div class="col-6 mb-3">
                <a href="/master/ninja" style="text-decoration:none;">
                    <div class="menu-card">
                        <h1>🥷</h1>
                        <h5>Ninja Monitor</h5>
                    </div>
                </a>
            </div>

            <div class="col-6 mb-3">
                <div class="menu-card">
                    <h1>📜</h1>
                    <h5>Missions</h5>
                </div>
            </div>

            <div class="col-6">
                <div class="menu-card">
                    <h1>⚔️</h1>
                    <h5>Training</h5>
                </div>
            </div>

            <div class="col-6">
                <div class="menu-card">
                    <h1>🏆</h1>
                    <h5>Leaderboard</h5>
                </div>
            </div>

        </div>

        <!-- STATS -->
        <div class="card-box">

            <h5 class="text-primary fw-bold">Ninja Activity</h5>

            <div class="d-flex justify-content-between mt-3 text-center">

                <div>
                    <h2 class="text-primary">6</h2>
                    <small>Total Ninja</small>
                </div>

                <div>
                    <h2 class="text-primary">12</h2>
                    <small>Missions</small>
                </div>

                <div>
                    <h2 class="text-primary">3</h2>
                    <small>Online</small>
                </div>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-4 mb-5">

            <a href="/master-view-ninja">
                <button class="btn-blue">
                    Lihat Web Ninja
                </button>
            </a>

            <a href="/master/ninja">
                <button class="btn-light-custom">
                    Pantauan Ninja
                </button>
            </a>

        </div>

    </div>

    <!-- NAVBAR -->
    <div class="bottom-nav">

        <div class="nav-item">
            Home
        </div>

        <div class="nav-item">
            Ninja
        </div>

        <div class="nav-item">
            Setting
        </div>

    </div>

</div>

</body>
</html>