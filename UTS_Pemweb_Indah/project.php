<?php
include 'db_connect.php';
?>

<style>
    .navbar .menu li a:hover{
    color: #537edb;
}
.navbar.sticky .menu li a:hover{
    color: #fff;
}

     /* Center the main container */
     .container {
        max-width: 900px; /* Adjust width as desired */
        margin: 0 auto; /* Centers the container */
    }

    /* Page Title */
    .text-muted {
        color: #6c757d !important;
    }

    /* Card Styling */
    .card {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        cursor: pointer;
        text-align: center; /* Center align text inside cards */
    }

    /* Hover Effect for Cards */
    .card:hover {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px); /* Lift the card slightly on hover */
    }

    /* Card Title */
    .card-title {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 10px;
    }

    /* Card Text */
    .card-text {
        color: #666;
        font-size: 1em;
    }

    /* Custom Shadow */
    .custom-shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .project .title::after {
  content: 'project ';
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
            <li><a href="project.php" style="color: black;">Project</a></li>
            <li><a href="experience.php" style="color: black;">Experience</a></li>
            <li><a href="contact.php" style="color: black;">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    <div>
</nav>
<section id="portfolios">

<?php
    $sql = "SELECT id,project_name , description ,start_date ,image FROM  projects WHERE id IN (1, 2, 3,4)";
    
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error in query: " . $conn->error;
    }
      // Menyimpan semua hasil dalam array
      $skillsData = [];
      while ($row = $result->fetch_assoc()) {
          $skillsData[] = [
            'id' => $row['id'],
              'project_name' => htmlspecialchars($row["project_name"]),
              'description' => htmlspecialchars($row["description"]),
              'start_date' => htmlspecialchars($row["start_date"]),
              'image' => htmlspecialchars($row["image"]),

          ];
      }
?>
 <div class="project content container">
    <h2 class="title">My Project</h2>
    <div class="row justify-content-center">
      <?php foreach ($skillsData as $index => $project) { ?>
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="card rounded custom-shadow">
          <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="Portfolio Image"/>
            <div class="card-body">
              <h4 class="card-title"><?php echo $project['project_name']; ?></h4>
              <p class="card-text fs-5">
                <?php echo $project['description']; ?>
              </p>
            </div>
          </div>
        </div>

        <?php if (($index + 1) % 2 == 0) { ?>
          </div><div class="row justify-content-center">
        <?php } ?>

      <?php } ?>
    </div> 
</div>
<?php
include 'footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
