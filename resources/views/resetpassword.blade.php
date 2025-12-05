@extends('headerfile')
@section('heading')
Reset Passwowrd
@endsection
@section('content')
<div class="container col-lg-6">
    <h2 class="text-center">Reset Password</h2>
    <br>

    <form action="{{route('password.reset',$token)}}" method="post">
        @csrf

        <div class="mb-3">
            <input type="hidden" name = "token" value ={{$token}}>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control" value ="{{$email}}">
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control"
                   placeholder="Enter Your New Password" >
        </div>

        <div class="mb-3">
            <input type="password" name="password_confirmation" class="form-control"
                   placeholder="Confirm Your New Password">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" id="resetbutton2">
                Update Password
            </button>
        </div>
    </form>
</div>
@endsection
@include('footerfile')