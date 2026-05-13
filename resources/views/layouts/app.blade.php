<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ninjago App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#e9ecef;
            font-family:Arial, sans-serif;
        }

        .mobile-screen{
            width:360px;
            min-height:740px;
            margin:20px auto;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 0 20px rgba(0,0,0,0.2);
            position:relative;
        }

        .btn-ninja{
            background:#241c8f;
            color:white;
            border-radius:20px;
            width:100%;
        }

        .btn-ninja:hover{
            background:#1b156d;
            color:white;
        }

        .top-bg{
            background:#cfd8ff;
            padding:20px;
        }

        .menu-card{
            background:white;
            border-radius:15px;
            padding:20px;
            text-align:center;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        .ninja-circle{
            width:45px;
            height:45px;
            border-radius:50%;
        }

        .bottom-nav{
            position:absolute;
            bottom:0;
            width:100%;
            background:white;
            border-top:1px solid #ddd;
            padding:10px 0;
        }

    </style>

</head>
<body>

<div class="mobile-screen">

    @yield('content')

</div>

</body>
</html>