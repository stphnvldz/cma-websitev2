<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">


</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-1 border-bottom">
        <a href="/" class="navbar-brand d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="/assets/img/cma_logo.png" alt="" style="width:100px;height:50px;">

        </a>
    
        <ul class="nav nav-pills my-auto">
            <li class="nav-item"><a href="/login" class="nav-link active me-2" aria-current="page">Login</a></li>
            <li class="nav-item"><a href="/register" class="nav-link active" aria-current="page">Register</a></li>
            
        </ul>
        </header>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators pd-1">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-sltide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="max-height: 30rem">
        <div class="carousel-item active">
            <img src="assets/img/cma.jpg" style="width:1500px;height:600px; " >
        </div>
        <div class="carousel-item">
            <img src="assets/img/cma.jpg"  style="width:1500px;height:600px;">
        </div>
        <div class="carousel-item">
            <img src="assets/img/cma.jpg"  style="width:1500px;height:600px;">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <div class=" col-sm-3 mb-3 mb-sm-3 mt-3 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Requirements?</h5>
              <p class="card-text">Want to be a tenant? Please Prepare your documents.</p>
              <p class="card-text">Click below for more information.</p>
              <a href="/requirements" class="btn btn-primary">Click Here</a>

            </div>
          </div>
        </div>
        <div class="col-sm-3 mt-3 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Place to Go?</h5>
              <p class="card-text">As you receive your schedule you are asked to go to our establishment.</p>
              <p class="card-text">Click below for more information.</p>
              <a href="/location" class="btn btn-primary">Click Here</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mt-3 mx-auto">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Objectives?</h5>
                <p class="card-text">Our management awaits you to take your oppurtunity!</p>
                <p class="card-text">Click below for more information.</p>
                <a href="/about" class="btn btn-primary">Click Here</a>
              </div>
            </div>
          </div>
      </div>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>