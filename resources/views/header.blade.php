<?php
  use App\Http\Controllers\ProductController;
  $cartCount = 0;
  if(Session::has('user')){
    $cartCount = ProductController::getCartCount();
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          
        </ul>
        <form action="/search" class="d-flex">
          <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav me-0 mb-2 mb-lg-0 dropstart">
          @if (Session::has('user'))
            <li class="nav-item"><a class="nav-link" href="/cartlist">Cart({{$cartCount}})</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
          @endif
          
        </ul>
      </div>
    </div>
  </nav>