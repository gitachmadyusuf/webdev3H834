<!DOCTYPE html>
<html lang="id">
    <head>
        <link rel="stylesheet" href="bootstrap/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <script src="bootstrap/bootstrap-5.3.8-dist/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
    </head>
    <body>
        <header class="bg-info py-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="display-5 text-muted">kamar yang tersedia</h1>
                </div>
            </div>
        </header>
      
       
    </body>
</html>
<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar WHERE slug = 'reguler'");
$data = mysqli_fetch_assoc($query);
?>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">Detail Kamar: <?php echo $data['tipe_kamar']; ?></h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <img src="1.jpeg" width="100" alt="">
            <tr>
                <th width="30%">Harga per Malam</th>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Jumlah Total Kamar</th>
                <td><?php echo $data['jumlah_kamar']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Kamar Terpakai</th>
                <td><?php echo $data['kamar_terpakai']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Sisa Kamar Tersedia</th>
                <td><strong><?php echo ($data['jumlah_kamar'] - $data['kamar_terpakai']); ?> Kamar</strong></td>
            </tr>
        </table>
    </div>
</div>

<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar WHERE slug = 'vip'");
$data = mysqli_fetch_assoc($query);
?>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">Detail Kamar: <?php echo $data['tipe_kamar']; ?></h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Harga per Malam</th>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Jumlah Total Kamar</th>
                <td><?php echo $data['jumlah_kamar']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Kamar Terpakai</th>
                <td><?php echo $data['kamar_terpakai']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Sisa Kamar Tersedia</th>
                <td><strong><?php echo ($data['jumlah_kamar'] - $data['kamar_terpakai']); ?> Kamar</strong></td>
            </tr>
        </table>
    </div>
</div>

<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar WHERE slug = 'vvip'");
$data = mysqli_fetch_assoc($query);
?>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">Detail Kamar: <?php echo $data['tipe_kamar']; ?></h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Harga per Malam</th>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Jumlah Total Kamar</th>
                <td><?php echo $data['jumlah_kamar']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Kamar Terpakai</th>
                <td><?php echo $data['kamar_terpakai']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Sisa Kamar Tersedia</th>
                <td><strong><?php echo ($data['jumlah_kamar'] - $data['kamar_terpakai']); ?> Kamar</strong></td>
            </tr>
        </table>
    </div>
</div>

<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar WHERE slug = 'paket keluarga'");
$data = mysqli_fetch_assoc($query);
?>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">Detail Kamar: <?php echo $data['tipe_kamar']; ?></h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Harga per Malam</th>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Jumlah Total Kamar</th>
                <td><?php echo $data['jumlah_kamar']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Kamar Terpakai</th>
                <td><?php echo $data['kamar_terpakai']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Sisa Kamar Tersedia</th>
                <td><strong><?php echo ($data['jumlah_kamar'] - $data['kamar_terpakai']); ?> Kamar</strong></td>
            </tr>
        </table>
    </div>
</div>

<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar WHERE slug = 'paket double bad'");
$data = mysqli_fetch_assoc($query);
?>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">Detail Kamar: <?php echo $data['tipe_kamar']; ?></h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Harga per Malam</th>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Jumlah Total Kamar</th>
                <td><?php echo $data['jumlah_kamar']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Kamar Terpakai</th>
                <td><?php echo $data['kamar_terpakai']; ?> Kamar</td>
            </tr>
            <tr>
                <th>Sisa Kamar Tersedia</th>
                <td><strong><?php echo ($data['jumlah_kamar'] - $data['kamar_terpakai']); ?> Kamar</strong></td>
            </tr>
        </table>
    </div>
</div>