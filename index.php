<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobar - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Diphylleia&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        .carousel, 
        .carousel-inner, 
        .carousel-item {
            height: 100vh;
        }
        .carousel-item {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .navbar {
            background-color: transparent;
            position: absolute;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            font-family: "Diphylleia", serif;
            font-weight: 400;
            font-size: 5rem;
            color: #ffffff;
            margin-left: 80px;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #cccccc; /* Slightly lighter shade on hover */
        }
        .navbar-nav {
            font-family: "Diphylleia", serif;
            font-weight: 400;
            font-size: 2rem;
        }
        .navbar-nav .nav-link {
            margin-left: 60px;
            color: #ffffff;
            transition: color 0.3s ease, transform 0.2s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #cccccc; /* Slightly lighter shade on hover */
            transform: scale(1.05); /* Slight scale up on hover */
        }
        .overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
            color: white;
        }
        .btn-primary {
            background-color: #000000;
            border-color: #000000;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #444444;
            border-color: #444444;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php
    // Define an array of background images
    $backgroundImages = [
        'image/restaurant.jpg',
        'image/food.jpg',
        'image/france.jpg'
    ];
    ?>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sobar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach($backgroundImages as $index => $image): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>" 
                     style="background-image: url('<?= htmlspecialchars($image) ?>')">
                </div>
            <?php endforeach; ?>
        </div>

        <div class="overlay-content">
            <h1 style="font-size: 4rem; color: white;">Welcome to Sobar</h1>
            <p style="font-size: 2rem; color: white;">Your perfect dining experience awaits!</p>
            <a href="reservation.php" class="btn btn-primary btn-lg">Make a Reservation</a>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize carousel with 3.5-second interval
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = new bootstrap.Carousel(document.getElementById('homeCarousel'), {
                interval: 2500,
                ride: 'carousel'
            });
        });
    </script>
</body>
</html>