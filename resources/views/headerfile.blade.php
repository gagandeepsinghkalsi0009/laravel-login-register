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

        #paraid{
            margin-right:530px;
            margin-top:15   px;
        }

        #resetbutton{
            margin-left:175px;
            text-decoration:none;
        }

        #resetbutton2{
             margin-left:275px;
            text-decoration:none;
        }

        .main{
           
         text-align: center;
        }

        .inner{  
            background-color: #F7F6F7;        
            height: 190px;
            width: 402px;
            display: inline-block;
            text-align: center;
                border-radius: 17px;
        }

           .content {
            margin-top: 40px;
            margin-bottom: 40px;
            display: block;
            margin-left: 270px;
        }

          .content p img{
            display: inline-block;
             width: 332px;
            height: 325px;
            margin-left: 36px;
            padding: 16px;

          }

          .para{
             background-color: #F7F6F7;
             width: auto;
             overflow: auto;
             margin-right: 314px;
                 border-radius: 17px;
          }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar-custom d-flex align-items-center justify-content-between px-4">
        <h2 class="m-0">@yield('heading','User Successfully Logged In')</h2>
    </nav>

    @hassection('main')
    @yield('main')
    @else
    No Content Found
    @endif


    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>