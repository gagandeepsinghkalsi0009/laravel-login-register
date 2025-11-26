<x-bheader/>
<body>

    <div class="navbar d-flex align-items-center justify-content-between px-4">

        <h2 id="tag" class="m-0">
            User Successfully Logged In {{ $data->email }}
        </h2>

        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" 
                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> Account
            </button>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

                <li>
                    <a class="dropdown-item" href="{{ route('updatepage.user', $data->id) }}">
                        <i class="bi bi-key"></i> User Profile
                    </a>
                </li>


                <li>
                    <a class="dropdown-item" href="{{ route('reset.pass', $data->id) }}">
                        <i class="bi bi-key"></i> Reset Password
                    </a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>

            </ul>
        </div>

    </div>

    <br>
    <div class="main">
    <h1>Welcome , {{ $data->email }}</h1>
    <p>Hello Make Changes in Profile Section Above</p>
    </div>
<x-bfooter/>
