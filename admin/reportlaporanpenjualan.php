<?php
include("../connection/connect.php");
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet    = new Spreadsheet();
$sheet          = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2','LAPORAN PENJUALAN COFFEEVIBES');
$sheet->mergeCells('A2:H2');

$sheet->setCellValue('A3','No.');
$sheet->setCellValue('B3','Nama User');
$sheet->setCellValue('C3','Nama Menu');
$sheet->setCellValue('D3','Jumlah');
$sheet->setCellValue('E3','Harga');
$sheet->setCellValue('F3','Alamat Pengiriman');
$sheet->setCellValue('G3','Status Pemesanan');
$sheet->setCellValue('H3','Tanggal Order');

$sql = mysqli_query($db,"SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id");
$i  = 4;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('A'.$i,$no++);
    $sheet->setCellValue('B'.$i,$row['username']);
    $sheet->setCellValue('C'.$i,$row['title']);
    $sheet->setCellValue('D'.$i,$row['quantity']);
    $sheet->setCellValue('E'.$i,'Rp. '.$row['price']);
    $sheet->setCellValue('F'.$i,$row['address']);
    $sheet->setCellValue('G'.$i,$row['status']);
    $sheet->setCellValue('H'.$i,$row['date']);
    $i++;
}

$styleArray = [
    'borders'=>[
        'allBorders'=>[
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$sheet->getStyle('A2:H2')->applyFromArray($styleArray);

$i = $i - 1;
$sheet->getStyle('A3:H'.$i)->applyFromArray($styleArray);
$sheet->getStyle('A2:H2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A2:H2')->getFont()->setBold(true);
$headerCellStyle = $sheet->getStyle('A3:H3');
$headerCellStyle->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$headerCellStyle->getFont()->setBold(true);

$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(15);
$sheet->getColumnDimension('C')->setWidth(20);
$sheet->getColumnDimension('D')->setWidth(15);
$sheet->getColumnDimension('E')->setWidth(12);
$sheet->getColumnDimension('F')->setWidth(24);
$sheet->getColumnDimension('G')->setWidth(20);
$sheet->getColumnDimension('H')->setWidth(20);

$writer = new Xlsx($spreadsheet); // Membuat objek writer untuk menyimpan spreadsheet

$filename = 'Report Laporan Penjualan.xlsx'; // Nama file spreadsheet baru
$savePath = __DIR__ . '/' . $filename; // Jalur lengkap untuk menyimpan file

$writer->save($savePath); // Menyimpan spreadsheet dengan jalur lengkap yang ditentukan

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $filename);
readfile($savePath); // Mengirimkan file spreadsheet yang diunduh ke pengguna
?>