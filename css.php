<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header class="bg-primary py-5">
        <div class="container">
            <h1 class="display-4 text-white">Hello Bootstrap!</h1>
        </div>
    </header>
    <a href="css.php?hal=home834">Home</a>
    <a href="css.php?hal=profile834">Profile</a>
    <a href="css.php?hal=kontak834">Kontak</a>

    <?php
    if($_GET) {
        if($_GET["hal"]=="home834") {
            include "home.php";
        } else if ($_GET["hal"]=="profile834") {
            include "profile.php";
        } else if($_GET["hal"]=="kontak834") {
            include "kontak.php";
        } else {
            echo "Halaman tidak ditemukan.";
        }
    } else {
    include "beranda.php";
    }
    ?>

</body>


</html>