<?php
include "koneksi.php"; // Menggunakan koneksi database yang sudah ada

$pesan_sukses = "";
$bayar = 0;
$kembalian = 0;
$durasi_malam = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namapemesan   = $_POST["pemesan834"] ?? '';
    $tanggalpesan  = $_POST["tanggalpesan834"] ?? '';
    $jumlahkamar   = intval($_POST["jumlahkamar834"] ?? 0);
    $hargakamar    = intval($_POST["hargakamar834"] ?? 0);
    $uang_dibayar  = intval($_POST["uang_dibayar834"] ?? 0); // Pastikan input ini ada di form

    // Hitung total bayar = jumlah kamar * harga
    $bayar = $jumlahkamar * $hargakamar;

    // Hitung kembalian
    $kembalian = $uang_dibayar - $bayar;

    $pesan_sukses = "Dear customer, " . $namapemesan . " anda sudah memesan kamar tanggal " . $tanggalpesan . " dengan jumlah kamar " . $jumlahkamar . " total harga " . $bayar . ", dengan tunai " . $uang_dibayar . ". Kembalian " . $kembalian;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container_836" style="max-width: 600px; margin-top: 20px;">
        <h2>Form Transaksi Kamar Hotel</h2>

        <!-- Action dikosongkan agar memproses di file ini sendiri -->
        <form action="" method="POST">
            <div class="form-group_836">
                <label>Nama Pemesan</label>
                <input type="text" name="pemesan834" required><br>
            </div>
            <div class="form-group_836">
                <label>Tanggal Pesan</label>
                <input type="date" name="tanggalpesan834" required><br>
            </div>
            <div class="form-group_836">
                <label>Jumlah Kamar</label>
                <input type="number" name="jumlahkamar834" min="1" required><br>
            </div>
            <div class="form-group_836">
                <label>Harga Kamar</label>
                <input type="number" name="hargakamar834" required><br>
            </div>
            <div class="form-group_836">
                <label>Uang Tunai Dibayar</label>
                <input type="number" name="uang_dibayar834" required><br>
            </div>
            <input type="submit" value="Pesan" class="btn_836">
        </form>

        <?php if (!empty($pesan_sukses)): ?>
            <div style="margin-top: 20px; padding: 15px; background: #e8f4fd; border-radius: 5px; border-left: 5px solid #3498db;">
                <h3>Struk / Bukti Transaksi:</h3>
                <p><?php echo $pesan_sukses; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>