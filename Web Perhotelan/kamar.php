<?php

$slug = $_GET["p"];

$pilih =mysqli_query($conn, "select * from kamar where slug = '$slug'");
$isi =mysqli_fetch_assoc($pilih);

if($isi) {
    $kosong= ($isi['jumlah_kamar'] - $isi['kamar_terpakai']);

?>
<div class=" card mt-4 shadow-sm">
    <div class=" card-header bg-success text-white">
        <h3 class="mb-0 text-capitalize">keterangan <?php echo $isi['tipe_kamar'];?></h3>
    </div>
    <div class="card-body">
        <table class=" table table-bordered">
            <tr>
                <th width="30%">harga per malam</th>
                <td>rp <?php echo number_format($isi['harga']);?></td>
                
            </tr>
            <tr>
                <th>jumlah total kamar</th>
                <td><?php echo $isi['jumlah_kamar'];?></td>
            </tr>
            <tr>
                <th>kamar terpakai</th>
                <td><?php echo $isi['kamar_terpakai'];?></td>
            </tr>
            <tr>
                <th>kamar tersedia</th>
                <td><strong><?php echo $kosong;?> kamar</strong></td>
            </tr>
        </table>
    </div>
</div>
<?php
} else {
    echo "<'div class='alert alert-warning text-center'>kosong</div>";
}
?>