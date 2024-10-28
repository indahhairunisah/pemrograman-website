<?php
include 'db_connect.php';
include 'navbar.php';

$query = "SELECT * FROM pages WHERE page_name = 'home'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Linking the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <style>
        nav a {
    text-decoration: none;
}
nav a:hover {
    text-decoration: none;
}

    </style>
</head>
<body>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="container">
            <div class="row align-items-left">
                <div class="col-md-8 mx-auto text-left home-content"> 
                    <br><br><br><br><br><br><br><br><br>
                    <div class="text-1 h4">Hello, my name is</div>
<div class="text-2 display-4"><?php echo $data['title']; ?></div>
<div class="text-3 h5"><?php echo $data['content']; ?> <span class="typing"></span></div>
                    <a href="about.php" class="btn btn-primary mt-4">About Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
