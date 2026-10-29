<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_json = 'data_kamar.json';

    // Ambil data kiriman form
    $id = $_POST['id'] ?? '';
    $nomor_kamar = trim($_POST['nomor_kamar'] ?? '');
    $tipe_kamar = $_POST['tipe_kamar'] ?? '';
    $fasilitas = $_POST['fasilitas'] ?? [];
    $harga_kamar = trim($_POST['harga_kamar'] ?? ''); // Berupa array dari checkbox

    // Load data JSON lama jika ada berkasnya
    $data_kamar = [];
    if (file_exists($file_json)) {
        $data_kamar = json_decode(file_get_contents($file_json), true) ?? [];
    }

    if (empty($id)) {
        // --- PROSES INPUT BARU ---
        $kamar_baru = [
            'id' => uniqid('room_', true), // Membuat Unique ID acak
            'nomor_kamar' => $nomor_kamar,
            'tipe_kamar' => $tipe_kamar,
            'fasilitas' => $fasilitas,
            'harga_kamar' => $harga_kamar
        ];
        $data_kamar[] = $kamar_baru;
    } else {
        // --- PROSES UBAH DATA (UPDATE) ---
        foreach ($data_kamar as &$kamar) {
            if ($kamar['id'] === $id) {
                $kamar['nomor_kamar'] = $nomor_kamar;
                $kamar['tipe_kamar'] = $tipe_kamar;
                $kamar['fasilitas'] = $fasilitas;
                $kamar['harga_kamar'] = $harga_kamar;
                break;
            }
        }
    }

    // Tulis kembali data array lengkap ke dalam format JSON berkode rapi (pretty print)
    file_put_contents($file_json, json_encode($data_kamar, JSON_PRETTY_PRINT));

    // Kembalikan user ke halaman dashboard utama
    header('Location: kamar_hotel_836.php');
    exit;
} else {
    // Jika diakses direct tanpa POST, lempar balik ke halaman utama
    header('Location: kamar_hotel_836.php');
    exit;
}
