@extends('master')

@section('content')

<div class="container py-5">
    <h3 class="text-center text-info">Registration Page</h3><br>

        <div class="d-flex justify-content-center">

            <form action="register" method="POST" class="w-50">
            @csrf
                <div class="form-group">  
                <label for="userName">User Name</label>
                <input type="text" name="name" class="form-control" id="name"  placeholder="Enter user name">
                </div>
                <div class="form-group">  
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-info">Register</button>
            </form>
        </div>

</div>

@endsection
