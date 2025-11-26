@include('headerfile')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">

            <h2 class="text-center mb-4">Change Password</h2>

         
            <form action="{{route('change.pass',$pass->id)}}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Enter New Password</label>
                    <input type="text" class="form-control" name="password" >
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>

            </form>
            <br>
             @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}"/>
                @endif
        </div>
    </div>
</div>

@include('footerfile')