<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['detail-nama'];
    $nomor = $_POST['detail-nomor'];
    $alamat = $_POST['detail-alamat'];
    $tanggal = $_POST['detail-tanggal'];
    $harga = $_POST['detail-harga'];


    $sql = "INSERT INTO tb_transaksi VALUES(null, '$nama','$nomor','$alamat', '$tanggal', '$harga')";

    if (empty($nama) || empty($nomor) || empty($alamat) ||  empty($tanggal) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Transaksi Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../index.php';
            </script>
        ";
    }
} else {
    header('location: ../index.php');
}
