<div class="card-kelompok2" id="top-registrasi">
    <h2 class="h2-kelompok2">Registrasi Calon Tamu Hotel (NIM 816)</h2>
    <div class="landing-links-kelompok2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <a href="#data-registrasi" class="btn-link-kelompok2">Melihat Data Registrasi</a> |
        <?php endif; ?>
        <a href="#bantuan-registrasi" class="btn-link-kelompok2">Bantuan Form</a>
    </div>

    <form action="kelompok2.php?page=registrasi" method="POST" class="form-kelompok2">
        <div class="form-group-kelompok2">
            <label for="username_816_kelompok2">Nama Sesuai KTP</label>
            <input type="text" id="username_816_kelompok2" name="username_816_kelompok2" required>
        </div>

        <div class="form-group-kelompok2">
            <label for="ktp_816_kelompok2">No KTP</label>
            <input type="text" id="ktp_816_kelompok2" name="ktp_816_kelompok2" required>
        </div>

        <div class="form-group-kelompok2">
            <label for="date_816_kelompok2">Tanggal Registrasi</label>
            <input type="date" id="date_816_kelompok2" name="date_816_kelompok2" required>
        </div>

        <button type="submit" class="btn-submit-kelompok2">Check In</button>
    </form>
</div>

<!-- OUTPUT DATA REGISTRASI -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="card-kelompok2" id="data-registrasi" style="margin-top: 20px;">
        <h3 class="h3-kelompok2">Data Pengunjung Terdaftar</h3>
        <table class="table-output-kelompok2">
            <tr>
                <th>Nama Lengkap</th>
                <td><?= $_POST['username_816_kelompok2']; ?></td>
            </tr>
            <tr>
                <th>Nomor KTP</th>
                <td><?= $_POST['ktp_816_kelompok2']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Check-In</th>
                <td><?= $_POST['date_816_kelompok2']; ?></td>
            </tr>
        </table>
        <br>
        <a href="#top-registrasi" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
    </div>
<?php endif; ?>

<div class="card-kelompok2" id="bantuan-registrasi" style="margin-top: 20px;">
    <h3 class="h3-kelompok2">Bantuan Dokumen Registrasi</h3>
    <p>Gunakan kartu tanda pengenal resmi nasional (KTP) asli yang masih aktif guna memvalidasi kecocokan data administratif demi keamanan dan kenyamanan tamu selama menginap.</p>
    <br>
    <a href="#top-registrasi" class="back-top-kelompok2">↑ Kembali ke Atas Form</a>
</div>