<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Próba</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" type="image/x-icon" href="img/icon.ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="logo">
        <a href="#"><img src="img/hsa-logo-white.svg" alt></a>
    </div>
    <div class="list">
        <ul>
            <li><a href="index.php#devicespoint">Készülékek</a></li>
            <li><a href="index.php#topbrandspoint">Top márkák</a></li>
            <li><a href="index.php#soundspoint">Ismerősen cseng?</a></li>
            <li><a href="index.php#premiumpoint">Prémium lehetőségek</a></li>
            <li><a href="index.php#simcardpoint">SIM-kártya adatok</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/png, image/jpeg">
        <button type="submit" name="submit" style="height: auto">
            Upload
        </button>
    </form>
</div>
</body>
</html>