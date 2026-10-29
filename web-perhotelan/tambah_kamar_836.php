<?php
$file_json = 'data_kamar.json';
$kamar_edit = null;
$is_edit = false;

// Cek apakah mode ubah/edit data
if (isset($_GET['id'])) {
    $id_edit = $_GET['id'];
    if (file_exists($file_json)) {
        $data_kamar = json_decode(file_get_contents($file_json), true) ?? [];
        foreach ($data_kamar as $kamar) {
            if ($kamar['id'] === $id_edit) {
                $kamar_edit = $kamar;
                $is_edit = true;
                break;
            }
        }
    }
}

// Master Tipe Kamar sesuai ketentuan
$tipe_kamar_options = ['Reguler', 'VIP', 'VVIP', 'Paket Keluarga', 'Paket Double Bad'];

// Master Fasilitas Pilihan
$fasilitas_options = ['AC', 'Free WiFi', 'TV Kabel', 'Mini Bar', 'Bathtub', 'Breakfast'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $is_edit ? 'Ubah Data Kamar' : 'Tambah Kamar Baru'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container_836" style="max-width: 600px;">
        <h2><?= $is_edit ? 'Ubah Data Kamar Hotel' : 'Input Kamar Hotel Baru'; ?></h2>

        <form action="simpan_836.php" method="POST">
            <!-- Hidden ID untuk membedakan proses Insert atau Update -->
            <input type="hidden" name="id" value="<?= $is_edit ? htmlspecialchars($kamar_edit['id']) : ''; ?>">

            <div class="form-group_836">
                <label for="nomor_kamar">Nomor Kamar</label>
                <input type="text" id="nomor_kamar" name="nomor_kamar" required placeholder="Contoh: 101, A-05"
                    value="<?= $is_edit ? htmlspecialchars($kamar_edit['nomor_kamar']) : ''; ?>">
            </div>

            <div class="form-group_836">
                <label for="tipe_kamar">Tipe Kamar</label>
                <select id="tipe_kamar" name="tipe_kamar" required>
                    <option value="" disabled <?= !$is_edit ? 'selected' : ''; ?>>-- Pilih Tipe Kamar --</option>
                    <?php foreach ($tipe_kamar_options as $tipe): ?>
                        <option value="<?= $tipe; ?>" <?= ($is_edit && $kamar_edit['tipe_kamar'] == $tipe) ? 'selected' : ''; ?>>
                            <?= $tipe; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group_836">
                <label>Fasilitas Kamar</label>
                <div class="checkbox-group_836">
                    <?php
                    foreach ($fasilitas_options as $fasilitas):
                        // Cek apakah fasilitas ini dicentang sebelumnya (untuk mode edit)
                        $checked = ($is_edit && in_array($fasilitas, $kamar_edit['fasilitas'] ?? [])) ? 'checked' : '';
                    ?>
                        <div class="checkbox-item_836">
                            <input type="checkbox" id="f_<?= $fasilitas; ?>" name="fasilitas[]" value="<?= $fasilitas; ?>" <?= $checked; ?>>
                            <label for="f_<?= $fasilitas; ?>" style="display:inline; font-weight:normal; cursor:pointer;">
                                <?= $fasilitas; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group_836">
                <label for="nomor_kamar">Harga Kamar / malam</label>
                <input type="text" id="harga_kamar" name="harga_kamar" required placeholder="Contoh: 100000"
                    value="<?= $is_edit ? htmlspecialchars($kamar_edit['harga_kamar']) : ''; ?>">
            </div>
            <div style="margin-top: 30px;">
                <button type="submit" class="btn_836">Simpan Data</button>
                <a href="kamar_hotel_836.php" class="btn_836 btn_836-secondary" style="margin-left: 10px;">Batal</a>
            </div>
        </form>
    </div>
</body>

</html>