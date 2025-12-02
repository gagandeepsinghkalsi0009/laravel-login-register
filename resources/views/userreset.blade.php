@include('headerfile')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">

            <h2 class="text-center mb-4">Change Password</h2>

         
            <form action="{{route('change.pass',$pass->id)}}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Enter New Password</label>
                    <input type="text" class="form-control" name="password" >
                    @error('password')<span class="text-danger">{{$message}}@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input type="text" class="form-control" name="password_confirmation" >
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>

            </form>
            <br>
             @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}"/>
                @endif
                <a href="{{route('signin')}}" class="btn btn-primary" id="resetbutton">Back to LogIn</a>
        </div>
    </div>
</div>

@include('footerfile')