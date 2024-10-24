<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothes Cleanser</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="landingStyle.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/Gwashing.png" alt="Logo" height="30"> Clothes Cleanser
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="landing.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="priceCheck.php">Price check</a> </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="logoutButton">Log out</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid hero">
    <div class="row">
      <div class="col-md-12 p-0 position-relative">
        <div class="content">
          <div class="info-box">
            <h2>Tired of Laundry Day Blues?</h2>
            <p>Say goodbye to overflowing hampers and hello to convenient, high-quality online laundry services. We take the hassle out of washing, drying, and folding by picking up your clothes, cleaning them with expert care, and delivering them right back to your doorstep. Enjoy the extra time and energy you'll save by skipping the laundromat and letting professionals handle your clothes with the attention they deserve.</p>
            <p>Why choose us over traditional laundromats? We offer flexible scheduling, competitive pricing, and a commitment to eco-friendly practices. Our online platform makes it easy to schedule pickups, track your order, and customize your preferences, all from the comfort of your home. Plus, with our dedication to sustainable laundry solutions, you can feel good about reducing your environmental impact while enjoying fresh, clean clothes.</p>
          </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/OIP.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="img/OIP1.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="img/OIP2.jpg" class="d-block w-100" alt="Slide 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light py-3">
    <div class="container">
      <h5 class="text-center mb-2">Contact us</h5>
      <p class="text-center">Phone number: 0912312512+</p>
      <p class="text-center">Email: antonsupport@gmail.com</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="landingFunc.js"></script>
</body>
</html>