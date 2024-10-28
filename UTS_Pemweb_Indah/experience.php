<?php
include 'db_connect.php';
include 'navbar.php';
// Fungsi untuk mengambil data dari tabel 'experience'
function getExperiences($conn) {
    $query = "SELECT * FROM experience";
    return $conn->query($query);
}

$experiences = getExperiences($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Experience</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/> <!-- Owl Carousel CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> <!-- Owl Carousel JS -->
    <link rel="stylesheet" href="style.css">
<style>
.content {
    min-height: calc(100% - 60px);
   
}
nav a {
    text-decoration: none;
}
nav a:hover {
    text-decoration: none;
}


footer {
    background: #111;
    color: white;
    text-align: center; 
    padding: 20px; 
    position: fixed;
    bottom: 0; 
    width: 100%; 
}
</style>
    <!-- <style>


        body {
            padding-top: 80px;
            background-color: #1a1a1a;
            color: white;
        }

        .title {
            color: white;
            margin-bottom: 50px;
        }

        .card {
            background-color: #333;
            border: none;
            margin-bottom: 30px;
        }

        .card .text {
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .card .card-body p {
            color: #ddd;
        }

        .carousel-item img {
            max-height: 200px;
            object-fit: contain;
        }

        footer {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style> -->
    
    <script>
        $(document).ready(function() {
            $('.carousel').owlCarousel({
                items: 3,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Portfo<span style="color:#fff;">lio.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="skills.php">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- 
<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#" style="color: black;">Portfo<span>lio.</span></a></div>
        <ul class="menu" style="color: black;"> 
            <li><a href="home.php" style="color: black;">Home</a></li>
            <li><a href="about.php" style="color: black;">About</a></li>
            <li><a href="skills.php" style="color: black;">Skills</a></li>
            <li><a href="experience.php" style="color: black;">Experience</a></li>
            <li><a href="contact.php" style="color: black;">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    <div>
</nav> -->

<section class="content teams" id="teams">
    <div class="container mt-5">
        <h2 class="title text-center">My Achievements</h2>
        <div class="carousel owl-carousel">
<?php 
    while ($data = $experiences->fetch_assoc()) {
        echo '
        <div class="card">
            <div class="box">
                <img src="' . $data['image'] . '" alt="" class="card-img-top">
                <div class="text">' . $data['title'] . '</div>
                <div class="card-body">
                    <p class="card-text">' . $data['content'] . '</p>
                </div>
            </div>
        </div>
        ';
    }
?>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 Your Portfolio | All rights reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>
