<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kontak</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">home</a>
                </li>
                <li>
                    <a class="nav-link active" href="kontak.php">kontak</a>
                </li>
                <li>
                    <a class="nav-link" href="about.php">about</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="h1 ms-4">Formulir kontak:</h1>
    <form action="konfirmasi.php" method="POST" class="ms-4">
        <div class="form-group mb-3 mt-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required><br>
        </div>
        <div class="form-group mb-3 mt-2">
            <label>Kewarganegaraan:</label><br>
            <input type="radio" name="kewarganegaraan" value="WNI" required> WNI <br>
            <input type="radio" name="kewarganegaraan" value="Asing"> Asing <br>
        </div>
        <div class="form-group mb-3 mt-2">
            <label>Layanan:</label> <br>
            <input type="checkbox" name="layanan[]" value="Website"> Website <br>
            <input type="checkbox" name="layanan[]" value="Hosting"> Hosting <br>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</body>
</html>
