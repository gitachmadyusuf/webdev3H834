<div class="card-kelompok2" id="top-transaksi">
    <h2 class="h2-kelompok2">Reservasi Kamar Hotel (NIM 834)</h2>
    <div class="landing-links-kelompok2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pemesan_834_kelompok2'])) { ?>
            <a href="#data-transaksi" class="btn-link-kelompok2">Melihat Struk Pembayaran</a> |
        <?php } ?>
        <a href="#bantuan-transaksi" class="btn-link-kelompok2">Bantuan Form</a>
    </div>

    <form action="kelompok2.php?page=transaksi" method="POST" class="form-kelompok2">
        <div class="form-group-kelompok2">
            <label for="pemesan_834_kelompok2">Nama Pemesan</label>
            <input type="text" id="pemesan_834_kelompok2" name="pemesan_834_kelompok2" required>
        </div>

        <div class="form-group-kelompok2">
            <label for="tanggal_pesan_834_kelompok2">Tanggal Pesan</label>
            <input type="date" id="tanggal_pesan_834_kelompok2" name="tanggal_pesan_834_kelompok2" required>
        </div>

        <div class="form-group-kelompok2">
            <label for="jumlah_kamar_834_kelompok2">Jumlah Kamar</label>
            <input type="number" id="jumlah_kamar_834_kelompok2" name="jumlah_kamar_834_kelompok2" required>
        </div>

        <div class="form-group-kelompok2">
            <label for="harga_kamar_834_kelompok2">Harga Kamar per Malam (Rp)</label>
            <input type="number" id="harga_kamar_834_kelompok2" name="harga_kamar_834_kelompok2" required>
        </div>

        <button type="submit" class="btn-submit-kelompok2">Pesan Kamar</button>
    </form>
</div>

<!-- OUTPUT PEMROSESAN STRUK -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namapemesan  = $_POST["pemesan_834_kelompok2"];
    $tanggalpesan = $_POST["tanggal_pesan_834_kelompok2"];
    $jumlahkamar  = (int)$_POST["jumlah_kamar_834_kelompok2"];
    $hargakamar   = (int)$_POST["harga_kamar_834_kelompok2"];
    $bayar        = $jumlahkamar * $hargakamar;
?>

    <!--Struk Cetak Transaksi-->
    <div class="card-kelompok2" id="data-transaksi" style="margin-top: 20px;">
        <div class="fieldset-kelompok2"> <!--Styling garis putus-putus-->
            <div>
                <h3 class="h3-kelompok2">Struk Bukti Reservasi</h3>
            </div>
            <p><strong>Nama Pemesan:</strong> <?php echo ($namapemesan); ?></p>
            <p><strong>Tanggal Check-in:</strong> <?php echo ($tanggalpesan); ?></p>
            <p><strong>Jumlah Kamar:</strong> <?php echo $jumlahkamar; ?> Kamar</p>
            <p><strong>Harga Per Kamar:</strong> Rp <?php echo number_format($hargakamar, 0, ',', '.'); ?></p>
            <h4 class="total-bayar-kelompok2">Total Bayar: Rp <?php echo number_format($bayar, 0, ',', '.'); ?> </h4>
            <p>Terima kasih!</p>
        </div>
        <br>
        <a href="#top-transaksi" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
    </div>
<?php } ?>

<!--Panduan pemakaian Aplikasi-->
<div class="card-kelompok2" id="bantuan-transaksi" style="margin-top: 20px;">
    <h3 class="h3-kelompok2">Bantuan Kalkulasi Transaksi</h3>
    <p>Sistem otomatis akan mengalikan jumlah pesanan kamar dengan harga satuan tarif per malam untuk memunculkan ringkasan total nilai tagihan akhir pada nota bukti transaksi di atas.</p>
    <br>
    <a href="#top-transaksi" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
</div>