@extends('headerfile')
@section('heading')
SignUp
@endsection
<br><br><br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">
          
          <h2 class="text-center mb-4">Sign Up</h2>
          
          <form action ="{{route('signup')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <span>@error('email')<span class="text-danger">{{$message}}@enderror</span>
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
               <span>@error('email')<span class="text-danger">{{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="userTypeSelect" class="form-label">User Type</label>
              <select class="form-select" id="userTypeSelect" aria-label="Select user type" name="user_type">
                <option value="1" selected>User</option>
                <option value="2">Admin</option>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

             
          </form>
          
        </div>
      </div>
    </div>

    @include('footerfile')