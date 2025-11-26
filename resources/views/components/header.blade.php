<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <style>
    body {
      overflow-x: hidden;
      background-color: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 56px;
      left: 0;
      height: calc(100vh - 56px);
      width: 230px;
      background-color: #343a40;
      color: white;
      overflow-y: auto;
      padding-top: 15px;
      transition: transform .3s ease;
    }

    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      padding: 10px 20px;
      display: block;
      margin: 4px 8px;
      border-radius: 5px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #495057;
      color: white;
    }

    /* Sidebar Hidden on Mobile */
    @media (max-width: 991px) {
      .sidebar {
        transform: translateX(-260px);
      }
      .sidebar.open {
        transform: translateX(0);
      }
    }

    /* Content */
    .content {
      margin-left: 250px;
      padding: 20px;
      transition: margin-left .3s ease;
    }

    @media (max-width: 991px) {
      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <button class="btn btn-outline-light me-2 d-lg-none" id="toggleBtn">
        <i class="bi bi-list"></i>
      </button>

      <a class="navbar-brand" href="#">AdminPanel</a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link"><i class="bi bi-bell"></i></a></li>
          <li class="nav-item"><a class="nav-link"><i class="bi bi-person-circle"></i> Admin</a></li>
          <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h5 class="px-3 mb-3">Menu</h5>
    <a href="{{ route('admin.dash') }}" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
    
    <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
  </div>

   
  
