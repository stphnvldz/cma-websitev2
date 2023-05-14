<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a249ebf7f.js" crossorigin="anonymous"></script>

    <style>
        .heading {
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin: 2rem;
        }

        .contact-col {
            text-align: center;
            margin-top: 2rem;
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
        }

        .contact-item {
            margin-bottom: 2rem;
        }

        .contact-item i {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
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

      <div style=" margin-bottom: 50px; margin-top: 50px; font-family: Arial, sans-serif mt-5; font-size: 50px; font-weight: bold; color: #333; text-align: center;">
        LOCATION
      </div>
      

      <div class="container">
        <div class="row text-center">
            <div class="col-lg-6">
                <section class="location mt-3">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15442.633598405771!2d121.1698756!3d14.6185254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8d34474797d%3A0x7ccbb97a736aadf7!2sCity%20Mall%20of%20Antipolo!5e0!3m2!1sen!2sph!4v1681116305119!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <div class="contact-info text-justify mt-3">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>City Mall of Antipolo</h5>
                            <p>10 Olalia Road, Barangay Dela Paz, Antipolo, 1070 Rizal</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>09123456789</h5>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-clock"></i>
                        <span>
                            <h5>Admin Hours</h5>
                            <p>Monday to Friday, 7:00 AM - 5:00 PM</p>
                            <h5>Market Hours</h5>
                            <p>Monday to Sunday, 6:00 AM - 5:00 PM</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>