<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobar - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Diphylleia&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow-x: hidden;
        }
        .carousel, 
        .carousel-inner, 
        .carousel-item {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }
        .carousel-item {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .navbar {
            background-color: transparent;
            position: fixed;
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
            color: #cccccc;
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
            color: #cccccc;
            transform: scale(1.05);
        }
        .reservation-container {
            position: relative;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            margin-top: 500px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
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
    include('dbcon.php');

    $message = ''; // 預設為空訊息
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            $message = "Username and password are required.";
        } else {
            $input_username = $_POST['username'];
            $input_password = $_POST['password'];
    
            try {
                // 查詢資料庫
                $sql = "SELECT username, password FROM admin WHERE username = ?";
                $stmt = $db_connect->prepare($sql);
                $stmt->bind_Param('s', $input_username);
                $stmt->execute();
                $result = $stmt->get_result();
    
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc(); // 提取單行資料
                    // 驗證密碼
                    if (password_verify($input_password, $row['password'])) {
                        session_start();
                        $_SESSION['username'] = $input_username;
                            header("location: dashboard.php");
                    } else {
                            echo "<script>alert('Wrong Username or Password');</script>";
                    }
                } else {
                    $message = "Username not found.";
                }
            } catch (PDOException $e) {
                $message = "Error: " . $e->getMessage();
            }
        }
    }
    $backgroundImages = [
        'image/restaurant.jpg',
        'image/food.jpg',
        'image/france.jpg'
    ];
    if(!defined('base_url')) define('base_url','http://localhost/website/index.php');
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

        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
    <div class="reservation-container">
        <h2 class="text-center mb-4">Admin Login</h2>
        <form action="admin.php" method="POST">
            <!-- Username Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="username" placeholder="Enter your username" required>
                </div>
            </div>
            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </form>
    </div>
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