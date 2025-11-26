<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- DATATABLES -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        /* Sticky Navbar */
        .navbar-custom {
            background-color: gray;
            color: white;
            border-bottom: 1px solid black;
            height: 60px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Push main content down */
        .content {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        /* Sticky Footer */
        .footer-custom {
            background-color: gray;
            color: white;
            border-top: 1px solid black;
            height: 60px;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1000;
        }

        h2 {
            font-style: italic;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar-custom d-flex align-items-center justify-content-between px-4">
        <h2 class="m-0">@yield('heading','User Successfully Logged In')</h2>
    </nav>


    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>