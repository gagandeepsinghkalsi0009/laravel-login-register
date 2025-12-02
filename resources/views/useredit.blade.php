@include('headerfile')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">

            <h2 class="text-center mb-4">User Details</h2>

         
            <form action="{{route('update.user',$update->id)}}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" 
                           value="{{$update->data->name}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile" 
                           value="{{$update->data->mobile}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" 
                           value="{{$update->data->address}}">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <br>
                @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}"/>
                @endif

                @if(session('error'))
                <x-alert type ="danger" message ="{{session('error')}}"/>
                @endif
                <a href="{{route('signin')}}" class="btn btn-primary" id="resetbutton">Back to LogIn</a>
            </form>

        </div>
    </div>
</div>
@include('footerfile')
