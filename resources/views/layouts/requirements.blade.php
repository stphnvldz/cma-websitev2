<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requirements</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
    <style>
      .custom-image {
        max-width: 300px;
        height: auto;
      }
      </style>
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

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">TENANT APPLICATION REQUIREMENTS</h1>
    </div>
  </div>

  <div class="row">
   
    <div class="col-md-6">
      <div class="container px-4 mt-2">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Requirements</th>
              <th scope="col">Notes</th>
            </tr>
          </thead>
          <tbody>
            @foreach($req as $requirement)
            <tr>
              <td>{{ $requirement->requirements }}</td>
              <td>{{ $requirement->notes }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-6">
      <div class="text-center mt-5">
        <img src="assets/img/cma-admin.jpg" class="img-fluid custom-image" alt="Office of City Mall of Antipolo">
        <p class="font-weight-bold mt-3">Go to the office of City Mall of Antipolo located at the third floor of the Market.</p>
      </div>
    </div>
  </div>
</div>



    <script src="assets/js/bootstrap.js"></script>
</body>
</html>