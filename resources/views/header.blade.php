<?php
    use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user'))
    {
        $total = ProductController::cartItem();
    }

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">Eshopbd</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/myorder">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
        </ul>

        <form action="/search" class="form-inline ml-auto my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="query"type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>

      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

        <li class="nav-item mr-5">
            @if( $total > 0)
                <a class="nav-link text-white" href="/cartlist">Cart({{ $total }})</a>
            @else
            <a class="nav-link text-white" href="/" onClick='alert("Your Cart is Empty!")'>Cart({{ $total }})</a>
            @endif
        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>{{ Session::get('user')['name'] }}</b>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="max-width: 5px!important">
              <a class="dropdown-item text-success" href="#">Profile</a>
              <a class="dropdown-item text-danger" href="/logout">Log Out</a>
            </div>
          </li>
          @else
          <li class="nav-item">
          <a class="nav-link text-white" href="/register">Register</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="/login">Login</a>
          </li>
          @endif
      </ul>

    </div>
  </nav>


