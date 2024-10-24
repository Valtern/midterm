<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Check - Clothes Cleanser</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="priceCheck.css"> 
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
                    <a class="nav-link" href="priceCheck.php">Price check</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="logoutButton">Log out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid hero">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="content">
                    <div class="price-check-form">
                        <h2>Calculate Your Laundry Price</h2>
                        <form id="priceForm">
                            <div class="form-group">
                                <label for="weight">Weight (kg):</label>
                                <input type="number" class="form-control" id="weight" name="weight" min="0" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Service:</label>
                                <select class="form-control" id="service" name="service">
                                    <option value="1000">Wash Dry</option>
                                    <option value="1200">Wash and Ironing</option>
                                    <option value="900">Ironing Only</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="type">Type:</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="0">Regular</option>
                                    <option value="200">Express</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount:</label>
                                <select class="form-control" id="discount" name="discount">
                                    <option value="0">Non-member</option>
                                    <option value="0.1">Member</option> 
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Calculate Price</button>
                        </form>
                    </div>

                    <div class="price-result"> 
                        </div>
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
    <script src="priceCheck.js"></script> 
</body>
</html>