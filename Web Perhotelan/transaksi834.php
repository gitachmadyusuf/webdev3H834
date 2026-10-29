<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="kelompok2.php?page=transaksi" method="POST">
        Nama Pemesan<input type="text" name="pemesan834" id=""><br>
        Tanggal Pesan<input type="date" name="tanggalpesan834" id=""><br>
        Jumlah Kamar<input type="number" name="jumlahkamar834" id=""><br>
        Harga Kamar<input type="number" name="hargakamar834" id=""><br>
        <input type="submit" value="Pesan">
    </form>
    <?php
    if($_POST) {
    $namapemesan = $_POST["pemesan834"];
    $tanggalpesan = $_POST["tanggalpesan834"];
    $jumlahkamar = $_POST["jumlahkamar834"];
    $hargakamar = $_POST["hargakamar834"];
    $bayar= $jumlahkamar*$hargakamar;

    echo "Dear customer, " . $namapemesan . " anda sudah memesan kamar " . $tanggalpesan . " dengan jumlah kamar " . $jumlahkamar . " total harga " . $bayar;
    }
    ?>
</body>

</html>