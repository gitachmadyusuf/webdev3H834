<?php
// Mengambil halaman dari parameter GET, default ke halaman 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Hotel Kelompok 2</title>
    <link rel="stylesheet" href="kelompok2.css">
</head>

<body class="body-kelompok2">

    <!-- SIDEBAR NAVIGASI SEBELAH KIRI -->
    <div class="sidebar-kelompok2">
        <h2 class="title-sidebar-kelompok2">Hotel Kelompok 2</h2>
        <ul class="menu-kelompok2">
            <li><a href="kelompok2.php?page=home" class="<?= $page == 'home' ? 'active-kelompok2' : '' ?>">Beranda</a></li>
            <li><a href="kelompok2.php?page=kamar" class="<?= $page == 'kamar' ? 'active-kelompok2' : '' ?>">Input Kamar (836)</a></li>
            <li><a href="kelompok2.php?page=transaksi" class="<?= $page == 'transaksi' ? 'active-kelompok2' : '' ?>">Input Transaksi (834)</a></li>
            <li><a href="kelompok2.php?page=registrasi" class="<?= $page == 'registrasi' ? 'active-kelompok2' : '' ?>">Registrasi Tamu (816)</a></li>
        </ul>
        <div class="footer-sidebar-kelompok2">
            <p>STMIK AMIKOM SURAKARTA</p>
        </div>
    </div>

    <!-- HALAMAN BODY / CONTENT SEBELAH KANAN MENGGUNAKAN INCLUDE -->
    <div class="content-kelompok2">

        <?php
        if ($page == 'home') {
        ?>
            <!-- LANDING PAGE UTAMA & BANTUAN GLOBAL -->
            <div class="card-kelompok2" id="top-home">
                <h1 class="h1-kelompok2">Selamat Datang di Sistem Manajemen Hotel Kelompok 2</h1>
                <p>Gunakan menu di sebelah kiri untuk mengakses modul input data kamar, transaksi reservasi, atau registrasi calon tamu hotel.</p>

                <div class="landing-links-kelompok2">
                    <a href="#petunjuk-penggunaan" class="btn-link-kelompok2">↓ Lihat Petunjuk Penggunaan</a>
                </div>
            </div>

            <div class="room-container-kelompok2" id="" style="margin-top: 40px;">

                <!-- Kartu Kamar 1 -->
                 <div class="room-card-kelompok2">
                    <img src="img/image1.jpg" class="room-img-kelompok2" alt="Kamar Reguler">
                    <div class="room-info-kelompok2">
                        <h3>Reguler Room</h3>
                        <p class="">Rp 250.000 / malam</p>
                        <ul>
                            <li>AC & Free Wi-Fi</li>
                            <li>TV Kabel</li>
                            <li>Kamar Mandi Dalam</li>
                        </ul>
                        <button class="btn-submit-kelompok2">Pesan Sekarang!</button>
                    </div>
                 </div>
                
                 <!-- Kartu Kamar 2 -->
                 <div class="room-card-kelompok2">
                    <img src="img/image2.jpg" class="room-img-kelompok2" alt="Kamar VIP">
                    <div class="room-info-kelompok2">
                        <h3>VIP Room</h3>
                        <p class="">Rp 500.000 / malam</p>
                        <ul>
                            <li>AC, Free Wi-Fi, TV Kabel</li>
                            <li>Mini Bar & Bathub</li>
                            <li>Breakfast 2 orang</li>
                        </ul>
                        <button class="btn-submit-kelompok2">Pesan Sekarang!</button>
                    </div>
                 </div>

                 <!-- Kartu Kamar 3 -->
                 <div class="room-card-kelompok2">
                    <img src="img/image3.jpg" class="room-img-kelompok2" alt="Kamar Keluarga">
                    <div class="room-info-kelompok2">
                        <h3>Family Room</h3>
                        <p class="">Rp 750.000 / malam</p>
                        <ul>
                            <li>2 Bed Besar</li>
                            <li>Ruang Keluarga</li>
                            <li>Pemandangan Kota</li>
                        </ul>
                        <button class="btn-submit-kelompok2">Pesan Sekarang!</button>
                    </div>
                 </div>

            </div>

            <div class="card-kelompok2" id="petunjuk-penggunaan" style="margin-top: 40px;">
                <h3 class="h3-kelompok2">Petunjuk Penggunaan Aplikasi</h3>
                <ol class="list-bantuan-kelompok2">
                    <li><strong>Input Kamar Hotel (NIM 836):</strong> Digunakan oleh administrator untuk memasukkan data kamar baru beserta tipe dan fasilitas penunjang.</li>
                    <li><strong>Input Transaksi Reservasi (NIM 834):</strong> Digunakan oleh bagian kasir atau resepsionis untuk menghitung total bayar sewa kamar hotel berdasarkan jumlah dan harga per malam.</li>
                    <li><strong>Registrasi Calon Tamu (NIM 816):</strong> Digunakan untuk mendata identitas lengkap pengunjung saat proses check-in awal.</li>
                </ol>
                <a href="#top-home" class="back-top-kelompok2">↑ Kembali ke Atas</a>
            </div>
        <?php
        }
        // Struktur kontrol include dinamis
        elseif ($page == 'kamar') {
            include("kamar_836.php");
        } elseif ($page == 'transaksi') {
            include("transaksi_834.php");
        } elseif ($page == 'registrasi') {
            include("registrasi_816.php");
        }
        ?>

    </div>

</body>

</html>