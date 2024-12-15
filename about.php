<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobar - About Us</title>
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
        .half-screen {
            height: 50vh; /* 佔據視窗高度的一半 */
            background-image: url('image/staff.jpg'); /* 替換為你的圖片路徑 */
            background-size: cover; /* 確保圖片覆蓋整個區域 */
            background-position: center; /* 圖片置中 */
            background-repeat: no-repeat; /* 避免背景圖片重複 */
        }

        .content {
            height: 50vh; /* 剩餘的另一半屏幕 */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff; /* 可替換為你想要的背景色 */
        }
    </style>
</head>
<body>
    <div class="half-screen">
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
    </div>
    <div class="container mt-5">
        <h2 class="text-center">About Us</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="about-image.jpg" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-6">
                <h3>Our Story</h3>
                <p>Welcome to [Restaurant Name], where culinary excellence meets exceptional hospitality. Established in [Year], we specialize in [Cuisine Type] and take pride in offering a warm and inviting atmosphere for all our guests.</p>
                <h4>Our Team</h4>
                <p>Our talented chefs and dedicated staff work tirelessly to ensure your dining experience is unforgettable.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
