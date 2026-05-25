<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Monitor</title>

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
            padding:20px;
        }

        /* CONTAINER (RESPONSIVE REPLACEMENT PHONE) */
        .phone{
            width:100%;
            max-width:420px;
            min-height:100vh;
            background:white;
            overflow:hidden;
            position:relative;
            border-radius:25px;
            box-shadow:0 0 25px rgba(0,0,0,0.1);
        }

        /* HEADER */
        .header{
            background:linear-gradient(135deg,#4da6ff,#007bff);
            padding:25px 20px;
            color:white;
            border-bottom-left-radius:35px;
            border-bottom-right-radius:35px;
        }

        .back-btn{
            color:white;
            text-decoration:none;
            font-size:24px;
            font-weight:bold;
        }

        /* CARD */
        .ninja-card{
            background:white;
            border-radius:25px;
            padding:15px;
            margin-top:15px;
            box-shadow:0 5px 12px rgba(0,0,0,0.08);
            display:flex;
            justify-content:space-between;
            align-items:center;
            transition:0.3s;
        }

        .ninja-card:hover{
            transform:translateY(-3px);
        }

        .ninja-info{
            display:flex;
            align-items:center;
            gap:12px;
        }

        .ninja-img{
            width:60px;
            height:60px;
            border-radius:50%;
            object-fit:cover;
        }

        /* STATUS */
        .status{
            padding:6px 12px;
            border-radius:20px;
            font-size:12px;
            font-weight:bold;
            color:white;
        }

        .online{
            background:#22c55e;
        }

        .offline{
            background:#ef4444;
        }

        /* BUTTON */
        .btn-blue{
            background:#007bff;
            color:white;
            border:none;
            border-radius:15px;
            padding:14px;
            width:100%;
            margin-top:25px;
            font-weight:bold;
            text-align:center;
            display:block;
            text-decoration:none;
            transition:0.3s;
        }

        .btn-blue:hover{
            background:#005fd1;
            color:white;
        }

        /* DESKTOP UPGRADE */
        @media (min-width: 992px){

            body{
                padding:40px;
            }

            .phone{
                max-width:700px;
            }

            .ninja-card{
                padding:20px;
            }

            .ninja-img{
                width:70px;
                height:70px;
            }
        }

    </style>

</head>
<body>

<div class="phone">

    <!-- HEADER -->
    <div class="header">

        <a href="/master" class="back-btn">←</a>

        <h3 class="mt-3 fw-bold">Ninja Monitoring</h3>

        <small>Pantauan semua ninja aktif</small>

    </div>

    <!-- CONTENT -->
    <div class="p-3 pb-4">

        <!-- KAI -->
        <div class="ninja-card">

            <div class="ninja-info">

                <img src="https://i.pinimg.com/736x/f3/e6/8d/f3e68db25c2c77f7b9d6d33bcd0a77cf.jpg"
                class="ninja-img">

                <div>
                    <h5 class="mb-0">Kai</h5>
                    <small class="text-muted">Fire Ninja</small>
                </div>

            </div>

            <div class="status offline">OFFLINE</div>

        </div>

        <!-- JAY -->
        <div class="ninja-card">

            <div class="ninja-info">

                <img src="https://i.pinimg.com/736x/6d/ca/e9/6dcae9fcba32d22df735c6d1c44cc979.jpg"
                class="ninja-img">

                <div>
                    <h5 class="mb-0">Cikal ganteng</h5>
                    <small class="text-muted">Lightning Ninja</small>
                </div>

            </div>

            <div class="status online">ONLINE</div>

        </div>

        <!-- ZANE -->
        <div class="ninja-card">

            <div class="ninja-info">

                <img src="https://i.pinimg.com/736x/f3/e6/8d/f3e68db25c2c77f7b9d6d33bcd0a77cf.jpg"
                class="ninja-img">

                <div>
                    <h5 class="mb-0">Zane</h5>
                    <small class="text-muted">Ice Ninja</small>
                </div>

            </div>

            <div class="status offline">OFFLINE</div>

        </div>

        <!-- BUTTON -->
        <a href="/master-view-ninja" class="btn-blue">
            Lihat Dashboard Ninja
        </a>

    </div>

</div>

</body>
</html>