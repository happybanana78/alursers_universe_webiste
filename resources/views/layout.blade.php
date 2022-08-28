<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset("favicon.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Alursers Universe</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- navabar -->
    <nav class="navbar navbar-expand-lg bg-none">
        <div class="container-fluid">
          <a class="navbar-brand mt-5 ms-5" href="#">
            <img src="{{asset("images/logo.png")}}" alt="" width="240" height="130">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fs-2 navbar-dark"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-5 me-lg-3 fs-2 fw-bold text-center">
              <li class="nav-item">
                <a class="nav-link active d-none" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">COLLECTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ROADMAP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link fa fa-search" onclick="menuRaritySlider()"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-lg join-btn fs-3 ms-lg-3" data-bs-toggle="modal" data-bs-target="#login_form">JOIN NOW!</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- endnavbar -->
    @yield('content')
    <footer class="mt-auto">
        <div class="container d-flex justify-content-center py-5 fs-1">
            <a class="social mx-2 text-light text-decoration-none fab fa-twitter" href="https://twitter.com/alurser_squad" target="_blank"></a>
            <a class="social mx-2 text-light text-decoration-none fab fa-telegram" href="https://t.me/+VLqHa62uGIE3NmE0" target="_blank"></a>
            <a class="social mx-2 text-light text-decoration-none fab fa-discord" href="https://discord.gg/s8Gq8Vwe" target="_blank"></a>
        </div>  
    </footer>
    <script src="{{asset("js/bloobs_slider.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>