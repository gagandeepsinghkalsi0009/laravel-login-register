<x-bheader/>
  <body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">
          
          <h2 class="text-center mb-4">Update User Details</Details></h2>
          
          <form action ="{{ route('update.user', $user->id) }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ $user->email }}" >
              
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>  

            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name" value="{{ $user->data->name  }}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="mobile" value="{{ $user->data->mobile }}">
              </div>
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" value="{{ $user->data->address }}">
              </div>
           

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
          </form>
        </div>
      </div>
    </div>

   <x-bfooter/>