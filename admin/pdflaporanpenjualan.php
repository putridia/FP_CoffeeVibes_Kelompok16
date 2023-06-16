<?php
include("../connection/connect.php");
require_once("./dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($db,"SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id");
$html = '<center><h3>Laporan Penjualan CoffeeVibes</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama User</th>
<th>Nama Menu</th>
<th>Jumlah</th>
<th>Harga</th>
<th>Alamat Pengiriman</th>
<th>Status Pemesanan</th>
<th>Tanggal Order</th>
</tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $status1 = $row['status'];
    if ($status1 == null) {
        $status1 = "unprocessed";
    }
    // $statusSql = mysqli_query($db, "SELECT status FROM users_orders WHERE o_id = '$status1'");
    // $statusRow = mysqli_fetch_array($statusSql);
    // $namastatus = $statusRow['status'];
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['username']."</td>
    <td>".$row['title']."</td>
    <td>".$row['quantity']."</td>
    <td>Rp. ".$row['price']."</td>
    <td>".$row['address']."</td>
    <td>".$status1."</td>
    <td>".$row['date']."</td>
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
$dompdf->stream('Laporan Penjualan CoffeeVibes.pdf');
?>