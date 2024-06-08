<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
$html = '<center><h3>Data Transaksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%" style="text-align:center;">
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Alamat</th>
                <th>No. HP</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $transaction['nama'] . "</td>
                <td>" . $transaction['tanggal'] . "</td>
                <td>Rp. " . ($transaction['harga']) . "</td>
                <td>" . $transaction['alamat'] . "</td>
                <td>" . $transaction['nomor'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>
