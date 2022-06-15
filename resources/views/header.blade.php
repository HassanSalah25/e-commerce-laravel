<?php
use App\Http\Controllers\ProductController;
if(Session::has('user'))
{
  $total = ProductController::cartItem(); 
}

?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li> 
        </ul>
        <form class="d-flex" action="search" role="search">
          <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            
            @if(Session::has('user'))
            <li >
              <a class="nav-link" href="#">Cart({{$total}})</a>
          </li>
            <li>
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </div>
            </li>
            @else
            <li><a class="nav-link" href="/login">Login</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>