<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Konfirmasi Kontak</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">home</a>
                </li>
                <li>
                    <a class="nav-link" href="kontak.php">kontak</a>
                </li>
                <li>
                    <a class="nav-link" href="about.php">about</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Konfirmasi Kontak</h2>
        <p>Nama: <?php echo htmlspecialchars($_POST['nama']); ?></p>
        <p>Kewarganegaraan: <?php echo htmlspecialchars($_POST['kewarganegaraan']); ?></p>
        <p>Layanan yang dipilih:</p>
        <ul>
            <?php 
            if (isset($_POST['layanan'])) {
                foreach ($_POST['layanan'] as $layanan) {
                    echo "<li>" . htmlspecialchars($layanan) . "</li>";
                }
            } else {
                echo "<li>Tidak ada layanan yang dipilih</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
