<?php
include 'db_connect.php';

$query = "SELECT * FROM pages WHERE page_name = 'skills'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<style>
    .navbar .menu li a:hover{
    color: #537edb;
}
.navbar.sticky .menu li a:hover{
    color: #fff;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Linking the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>


</head>
<body>
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
</nav>
<section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>&emsp;&emsp;keahlian saya dalam rekayasa perangkat lunak masih belum sempurna. namun saya selalu memiliki rasa ingin tahu untuk mempelajari hal-hal baru dan saya sangat menyukai apa yang saya pelajari. Saya tahu kompetensi saya belum sempurna dan masih banyak yang lebih baik dari saya, tapi saya yakin dengan doa, kerja keras dalam belajar, dan berusaha saya yakin saya bisa menjadi yang terbaik dan lebih baik dari sebelumnya.</p>
                    <div class="contactinfo langue">
                        <h3 class="titlee">Bahasa</h3>
                        <ul>
                            <li>
                                <span class="text" style="color: rgb(119, 119, 119); font-size: 16px;">bahasa indonesia</span>
                                <span class="percent">
                                    <div style="width: 100%"></div>
                                </span>
                            </li>
        
                            <li>
                                <span class="text" style="color: rgb(119, 119, 119); font-size: 16px;">bahasa inggris</span>
                                <span class="percent">
                                    <div style="width: 75%"></div>
                                </span>
                            </li>
                            <li>
                                <span class="text" style="color: rgb(119, 119, 119); font-size: 16px;">bahasa korea</span>
                                <span class="percent">
                                    <div style="width: 35%"></div>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>70%</span>
                        </div>
                        <div class="line cpp"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>40%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CorelDraw</span>
                            <span>75%</span>
                        </div>
                        <div class="line coreldraw"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Microsoft Office</span>
                            <span>90%</span>
                        </div>
                        <div class="line microsoftoffice"></div>
                    </div>
                </div>
            </div>
            <br> <br><br>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
