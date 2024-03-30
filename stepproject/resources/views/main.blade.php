<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <head>
        <title>Shoe E-commerce - @yield('title')</title>
    </head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/"><img src="images/logo.png" alt="Shoe E-commerce" style="width:40px; margin-left:10px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home" style="margin-left:10px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about" style="margin-left:10px;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product" style="margin-left:10px;">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:10px;">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="services">Services</a>
          <a class="dropdown-item" href="contact">Contact</a>
          <a class="dropdown-item" href="faq">FAQ</a>
          @guest
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('registration') }}">Register</a>
        </li>
        @else
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
        </div>
    </li>
@endguest

        </div>
      </li>
    </ul>
  </div>
</nav>


            <main>
                @yield('content')
            </main>


            <br><br><br><br>
            <footer>
    <div class="container">
        <div class="footer-cols">
            <div class="footer-col">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, erat at aliquam.</p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                <li><a href="home">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="product">Products</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Info</h3>
                <p>San Miguel Street, City</p>
                <p>Email: pavillo.com</p>
                <p>Phone: +123 456 789</p>
            </div>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>