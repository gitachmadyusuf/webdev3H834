<?php
$file_json = 'data_kamar.json';
$data_kamar = [];

// Load data dari file JSON jika ada
if (file_exists($file_json)) {
    $json_content = file_get_contents($file_json);
    $data_kamar = json_decode($json_content, true) ?? [];
}

// Fitur Hapus Kamar via GET method
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id_hapus = $_GET['id'];

    // Filter array untuk menghapus data berdasarkan ID
    $data_kamar = array_filter($data_kamar, function ($kamar) use ($id_hapus) {
        return $kamar['id'] !== $id_hapus;
    });

    // Re-index array agar urut kembali
    $data_kamar = array_values($data_kamar);

    // Simpan ulang ke JSON
    file_put_contents($file_json, json_encode($data_kamar, JSON_PRETTY_PRINT));
    header('Location: kamar_hotel_836.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Kamar Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container_836">
        <h1>Dashboard Admin: Manajemen Kamar Hotel</h1>
        <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
            <p>Total Kamar Terdaftar: <strong><?= count($data_kamar); ?></strong></p>
            <a href="tambah_kamar_836.php" class="btn_836">+ Tambah Kamar Baru</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No. Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Fasilitas</th>
                    <th>Harga/ malam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($data_kamar)): ?>
                    <tr>
                        <td colspan="5" style="text-align: center; color: #888;">Belum ada data kamar hotel.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($data_kamar as $kamar): ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($kamar['nomor_kamar']); ?></strong></td>
                            <td><?= htmlspecialchars($kamar['tipe_kamar']); ?></td>
                            <td>
                                <?php
                                if (!empty($kamar['fasilitas'])) {
                                    echo implode(', ', array_map('htmlspecialchars', $kamar['fasilitas']));
                                } else {
                                    echo '<em style="color:#bbb;">Tidak ada fasilitas tambahan</em>';
                                }
                                ?>
                            </td>
                            <td><?= htmlspecialchars($kamar['harga_kamar']); ?></td>
                            <td class="action_links_836">
                                <a href="tambah_kamar_836.php?id=<?= urlencode($kamar['id']); ?>" class="edit">Ubah</a>
                                <a href="kamar_hotel_836.php?action=delete&id=<?= urlencode($kamar['id']); ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>