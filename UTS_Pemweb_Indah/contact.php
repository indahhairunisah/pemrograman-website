<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql_insert = "INSERT INTO contact (name, email, subject, message, created_at) VALUES ('$name', '$email', '', '$message', NOW())";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="style.css"> <!-- Linking the CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
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

        .title{
            margin-top: -90px;
        }
             .contact-content {
            display: flex;
            justify-content: space-between;
            
        }
        .column {
            width: 48%;
        }
        .left, .right {
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .icons .row {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .icons .info {
            margin-left: 10px;
        }
        .icons .head {
            font-weight: bold;
        }
        .icons .sub-title {
            color: #555;
        }
        form input, form textarea {
            width: 400px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form .button-area {
            text-align: right;
        }
        form button {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #218838;
        }
        hr {
            margin: 10px 0;
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
    </style>
</head>
<body>

<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#" style="color: black;">Portfo<span>lio.</span></a></div>
        <ul class="menu" style="color: black;"> 
            <li><a href="home.php" style="color: black;">Home</a></li>
            <li><a href="about.php" style="color: black;">About</a></li>
            <li><a href="project.php" style="color: black;">Project</a></li>
            <li><a href="experience.php" style="color: black;">Experience</a></li>
            <li><a href="contact.php" style="color: black;">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<section class="contact content" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
            
            <!-- Kolom Kiri: Menampilkan Data dari Tabel About -->
            <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Heyyo, you can contact me based on below. Lets check it now!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title"> <a href="https://www.google.com/maps/place/6%C2%B010'01.4%22S+106%C2%B034'57.7%22E/@-6.1679047,106.5804933,17z/data=!4m6!3m5!1s0x2e69ff0a7026435b:0xb1e17adb38ec6a25!7e2!8m2!3d-6.167053!4d106.5826996?hl=id" target="_blank" rel="noopener noreferrer">Total Persada Tangerang,Indonesia</a> </div>
                            </div> 
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"> <a href="mailto:indahhairunisah04@gmail.com" target="_blank" rel="noopener noreferrer">indahhairunisah04@gmail.com</a> </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-instagram-square"  style="color: rgb(233, 41, 99);"></i>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title"> <a href="https://www.instagram.com/indah.hai/" target="_blank" rel="noopener noreferrer">@indah.hai</a> </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa-brands fa-linkedin" style="color: rgb(22, 63, 243);"></i>
                            <div class="info">
                                <div class="head">Linkedin</div>
                                <div class="sub-title"> <a href="https://www.linkedin.com/in/indahhai/" target="_blank" rel="noopener noreferrer">Indah Hairunisah</a> </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-whatsapp-square" style="color: rgb(19, 197, 57);"></i>
                            <div class="info">
                                <div class="head">Whatsapp</div>
                                <div class="sub-title"> <a href="https://wa.me/6289647625026" target="_blank" rel="noopener noreferrer">Indah Hairunisah</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Kolom Kanan: Form Input ke Tabel Contact -->
            <div class="column right">
                <div class="text" style="font-size:30px;">Message me</div>
                <form action="" method="POST">
                    <div class="fields">
                        <div class="field name" style="width:500px;">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field textarea" style="width:500px; height:190px;">
                        <textarea name="message" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php

$conn->close();
?>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
