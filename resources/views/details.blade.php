<x-bheader/>

    <title>Registration Form</title>
  </head>
  <body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">
          
          <h2 class="text-center mb-4">Registration Details</h2>
          
          <form action="{{route('submit')}}" method ="post">
            @csrf
            <div class="row g-3">

              <div class="col-12">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name">
              </div>

              <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="mobile">
              </div>
              
              <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
              </div>
              
              
              <div class="col-12 d-grid mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Add Details</button>
              </div>

            </div> </form>
          
        </div>
      </div>
    </div>

   <x-bfooter/>