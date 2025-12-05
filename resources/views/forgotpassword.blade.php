@extends('headerfile')

@section('heading')
Forgot Password
@endsection
@section('content')
<br><br>

<div class="container col-lg-6">
    <h2 class="text-center">Forgot Password</h2>
    <br>

    <form action="{{ route('forgot.password') }}" method="POST">
        @csrf

        <div class="mb-3">
            <input type="email" name="email" class="form-control"
                   placeholder="Enter Your Email">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" id="resetbutton2">
                Reset Password
            </button>
        </div>
    </form>
</div>

@endsection

@include('footerfile')
