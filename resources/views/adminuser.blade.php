<x-header/>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">

      <h2 class="text-center mb-4">Update User Details</h2>

      <form action="{{route('update.user',$users->id)}}" method="post" class="shadow p-4 rounded bg-white">
        @csrf

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value="{{ $users->email }}">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
          <label class="form-label">User Type</label>
          <input type="text" class="form-control" name="user_type" value="{{$users->user_type}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" value="{{ $users->data->name ?? 'N/A'}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Mobile Number</label>
          <input type="text" class="form-control" name="mobile" value="{{ $users->data->mobile ?? 'N/A'}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" value="{{ $users->data->address ?? 'N/A'}}">
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>

    </div>
  </div>
</div>  
<x-footer/>