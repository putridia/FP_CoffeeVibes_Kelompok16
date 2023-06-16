<?php
include("../connection/connect.php");
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($db,"SELECT menu_kategori.*, menu.* FROM menu_kategori INNER JOIN menu ON menu_kategori.mk_id=menu.mk_id");
$html = '<center><h3>Laporan Menu CoffeeVibes</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama Kategori Menu</th>
<th>Nama Menu</th>
<th>Harga</th>
</tr>';
$no = 1;
while($row = mysqli_fetch_array($query)){
    $menuKategoriId = $row['mk_id'];

    // Ambil nama kategori dari database lainnya
    $kategoriSql = mysqli_query($db, "SELECT title FROM menu_kategori WHERE mk_id = '$menuKategoriId'");
    $kategoriRow = mysqli_fetch_array($kategoriSql);
    $namaKategori = $kategoriRow['title'];
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$namaKategori."</td>
    <td>".$row['title']."</td>
    <td>Rp. ".$row['price']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file ke PDF
$dompdf->stream('Laporan Menu CoffeeVibes.pdf');
?>