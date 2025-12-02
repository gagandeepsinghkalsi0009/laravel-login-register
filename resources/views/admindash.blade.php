<x-header/>

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
