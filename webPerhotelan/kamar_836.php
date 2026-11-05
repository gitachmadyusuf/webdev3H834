<?php
$tipe_kamar_options = ['Reguler', 'VIP', 'VVIP', 'Paket Keluarga', 'Paket Double Bad'];
$fasilitas_options = ['AC', 'Free WiFi', 'TV Kabel', 'Mini Bar', 'Bathtub', 'Breakfast'];
?>

<div class="card-kelompok2" id="top-kamar">
    <h2 class="h2-kelompok2">Input Kamar Hotel Baru (NIM 836)</h2>
    <div class="landing-links-kelompok2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <a href="#data-kamar" class="btn-link-kelompok2">Melihat Hasil Input</a> |
        <?php endif; ?>
        <a href="#bantuan-kamar" class="btn-link-kelompok2">Bantuan Form</a>
    </div>

    <form action="kelompok2.php?page=kamar" method="POST" class="form-kelompok2">
        <div class="form-group-kelompok2">
            <label for="nomor_kamar_836_kelompok2">Nomor Kamar</label>
            <input type="text" id="nomor_kamar_836_kelompok2" name="nomor_kamar_836_kelompok2" required placeholder="Contoh: 101, A-05">
        </div>

        <div class="form-group-kelompok2">
            <label for="tipe_kamar_836_kelompok2">Tipe Kamar</label>
            <select id="tipe_kamar_836_kelompok2" name="tipe_kamar_836_kelompok2" required>
                <option value="" disabled selected>-- Pilih Tipe Kamar --</option>
                <?php foreach ($tipe_kamar_options as $tipe) { ?>
                    <option value="<?= $tipe; ?>"><?= $tipe; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group-kelompok2">
            <label>Fasilitas Kamar</label>
            <div class="checkbox-group-kelompok2">
                <?php foreach ($fasilitas_options as $fasilitas) { ?>
                    <div class="checkbox-item-kelompok2">
                        <input type="checkbox" id="f_<?= $fasilitas; ?>_836_kelompok2" name="fasilitas_836_kelompok2[]" value="<?= $fasilitas; ?>">
                        <label for="f_<?= $fasilitas; ?>_836_kelompok2"><?= $fasilitas; ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="form-group-kelompok2">
            <label for="harga_kamar_836_kelompok2">Harga Kamar / malam</label>
            <input type="number" id="harga_kamar_836_kelompok2" name="harga_kamar_836_kelompok2" required placeholder="Contoh: 100000">
        </div>

        <button type="submit" class="btn-submit-kelompok2">Simpan Data Kamar</button>
    </form>
</div>

<!-- OUTPUT DATA POST -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomor_kamar_836_kelompok2'])): ?>
    <div class="card-kelompok2" id="data-kamar" style="margin-top: 20px;">
        <h3 class="h3-kelompok2">Data Kamar yang Diinput</h3>
        <table class="table-output-kelompok2">
            <tr>
                <th>Nomor Kamar</th>
                <td><?= $_POST['nomor_kamar_836_kelompok2']; ?></td>
            </tr>
            <tr>
                <th>Tipe Kamar</th>
                <td><?= $_POST['tipe_kamar_836_kelompok2']; ?></td>
            </tr>
            <tr>
                <th>Fasilitas</th>
                <td><?= isset($_POST['fasilitas_836_kelompok2']) ? implode(', ', array_map('htmlspecialchars', $_POST['fasilitas_836_kelompok2'])) : 'Tidak ada'; ?></td>
            </tr>
            <tr>
                <th>Harga per Malam</th>
                <td>Rp <?= number_format($_POST['harga_kamar_836_kelompok2'], 0, ',', '.'); ?></td>
            </tr>
        </table>
        <br>
        <a href="#top-kamar" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
    </div>
<?php endif; ?>

<!-- ANCHOR LANDING PAGE BANTUAN -->
<div class="card-kelompok2" id="bantuan-kamar" style="margin-top: 20px;">
    <h3 class="h3-kelompok2">Bantuan Cara Menginput Data Kamar</h3>
    <p><strong>Nomor Kamar:</strong> Isikan nomor identifikasi kamar secara unik (angka atau kombinasi huruf).</p>
    <p><strong>Tipe Kamar:</strong> Pilih salah satu opsi kelas kamar yang tersedia pada dropdown menu.</p>
    <p><strong>Fasilitas Kamar:</strong> Centang satu atau beberapa kotak fasilitas pendukung kamar tidur.</p>
    <br>
    <a href="#top-kamar" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
</div>