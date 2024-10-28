<?php
include 'db_connect.php';
include 'navbar.php';

$sql = "SELECT deskripsi FROM about WHERE id = 2";
$result_deskripsi = $conn->query($sql);

if ($result_deskripsi->num_rows > 0) {
    $row = $result_deskripsi->fetch_assoc();
    $deskripsi = $row['deskripsi'];
} else {
    $deskripsi = "Deskripsi tidak ditemukan.";
}

// Query untuk mendapatkan data title dan content
$query = "SELECT title, content FROM about WHERE id IN (2, 3, 4, 5, 6, 7)";
$result_data = $conn->query($query);
?>

<style>
    .navbar .menu li a:hover{
    color: #537edb;
}
.navbar.sticky .menu li a:hover{
    color: #fff;
}


.content {
    min-height: calc(100% - 60px);
   
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
nav a {
    text-decoration: none;
}
nav a:hover {
    text-decoration: none;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Linking the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: black;">Portfo<span>lio.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php" style="color: black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color: black;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skills.php" style="color: black;">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experience.php" style="color: black;">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color: black;">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#" style="color: black;">Portfo<span>lio.</span></a></div>
        <ul class="menu" style="color: black;"> 
            <li><a href="home.php" style="color: black;">Home</a></li>
            <li><a href="about.php" style="color: black;">About</a></li>
            <li><a href="project.php" style="color: black;">project</a></li>
            <li><a href="experience.php" style="color: black;">Experience</a></li>
            <li><a href="contact.php" style="color: black;">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    <div>
</nav>
<section class="about content" id="about">
    <div class="container">
        <h2 class="title text-center my-4">About Me</h2>
        <div class="row">
            <div class="col-lg-6">
                <img src="images/ndahhaii.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="text">I'm Indah and I'm a <span class="typing"></span></div>
                <p class="text-justify">
                    &emsp;&emsp; <span><?php echo $deskripsi; ?></span><br>
                </p>
                <h3>Biodata Saya</h3>
<p class="text-left">
<?php 
while ($data = $result_data->fetch_assoc()) {
    echo "<span><strong>" . $data['title'] . ":</strong> " . $data['content'] . "</span><br>";
    }
?>
</p>
                <a href="images/CVIndahFIX.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Download CV</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
