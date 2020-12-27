@extends('master')

@section('content')

<div class="container py-5">
    <h3 class="text-center text-info">Login Page</h3><br>

        <div class="d-flex justify-content-center">

            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-info">Login</button>
            </form>
        </div>

</div>

@endsection
