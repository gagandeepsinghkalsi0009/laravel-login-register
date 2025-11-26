@extends('headerfile')

@section('heading')
SignIn
@endsection
  <br><br><br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">
          
          <h2 class="text-center mb-4">Sign In</h2>
          
          <form action ="{{route('signin')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <span>@error('email')<span class="text-danger">{{$message}}@enderror</span>
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              <span>@error('password')<span class="text-danger">{{$message}}@enderror</span>
            </div>  
           

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
             
          </form>
        </div>
      </div>
    </div>

    @include('footerfile')