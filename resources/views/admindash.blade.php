<x-header/>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <button class="btn btn-outline-light me-2 d-lg-none" id="toggleBtn">
        <i class="bi bi-list"></i>
      </button>

      <a class="navbar-brand" href="#">AdminPanel</a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link"><i class="bi bi-person-circle"></i> Admin {{$login->email}} </a></li>
          <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Content -->
  <div class="content">

    <!-- USERS TABLE -->
    <h2>Users Details</h2>

    <a href="{{route('signup')}}" class="btn btn-primary btn-sm mb-2">Add New User</a>

    <div class="table-responsive">
      <table class="table table-bordered table-striped mt-3" id="mytable">
        <thead class="table-dark">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Delete User</th>
            <th>Update User</th>
          </tr>
        </thead>
        
        <tbody>
          @forelse($users as $user)
          <tr>
            <td>{{ $user->data->name ?? 'N/A' }}</td>
            <td>{{ $user->email ?? 'N/A' }}</td>
            <td>{{ $user->user_type ?? 'N/A' }}</td>
            <td>{{ $user->data->mobile ?? 'N/A' }}</td>
            <td>{{ $user->data->address ?? 'N/A' }}</td>
            <td><a href="{{ route('delete.admin', $user->id) }}">Delete</a></td>
            <td><a href="{{ route('edit.admin', $user->id) }}">Update</a></td>
          </tr>
          @empty
          No Users Found
          @endforelse
        </tbody>
      </table>
    </div>


  </div> <!-- end content -->
  <x-footer/>
  <script>
    $(document).ready(function() {
      $('#mytable').DataTable({
        responsive: true
      });
    });
     
  </script>

</body>
</html>
