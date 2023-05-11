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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/assets/img/cma_logo.png" alt="" style="width:100px;height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/requirements">Requirements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/location">Location</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/cma.jpg" class="d-block w-100" alt="..." style="width:1500px;height:600px; ">
      </div>
      <div class="carousel-item">
        <img src="assets/img/cma2.png" class="d-block w-100" alt="..." style="width:1500px;height:600px; ">
      </div>
      <div class="carousel-item">
        <img src="assets/img/cma3.png" class="d-block w-100" alt="..." style="width:1500px;height:600px; ">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col-md-8">
        <div class="table-responsive">
          <table class="table mt-3">
            <thead class="table-dark text-center">
              <th scope="col">ANNOUNCEMENT</th>
            </thead>
            <tbody>
              @if(isset($announcements) && count($announcements) > 0)
              @foreach($announcements as $announcement)
              <tr>
                <td>{{ $announcement->description }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td>No announcements found.</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="row mt-3 justify-content-center">
          <img src="assets/img/rizal_seal.jpg" class="img-fluid" alt="Rizal Seal" style="max-width: 200px; height: 150px;">
        </div>
        <div class="row mt-3 justify-content-center">
          <img src="assets/img/antipolo_seal.jpg" class="img-fluid" alt="Antipolo Seal" style="max-width: 200px; height: 150px;">
        </div>
      </div>
    </div>
  </div>


    


    <script src="assets/js/bootstrap.js"></script>
</body>
</html>