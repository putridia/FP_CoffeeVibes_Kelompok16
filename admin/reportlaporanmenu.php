<?php
include("../connection/connect.php");
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2', 'LAPORAN MENU COFFEEVIBES');
$sheet->mergeCells('A2:D2');

$sheet->setCellValue('A3', 'No.');
$sheet->setCellValue('B3', 'Nama Kategori Menu');
$sheet->setCellValue('C3', 'Nama Menu');
$sheet->setCellValue('D3', 'Harga');

$sql = mysqli_query($db, "SELECT menu_kategori.*, menu.* FROM menu_kategori INNER JOIN menu ON menu_kategori.mk_id=menu.mk_id");
$i = 4;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $menuKategoriId = $row['mk_id'];

    // Ambil nama kategori dari database lainnya
    $kategoriSql = mysqli_query($db, "SELECT title FROM menu_kategori WHERE mk_id = '$menuKategoriId'");
    $kategoriRow = mysqli_fetch_array($kategoriSql);
    $namaKategori = $kategoriRow['title'];

    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $namaKategori);
    $sheet->setCellValue('C' . $i, $row['title']);
    $sheet->setCellValue('D' . $i, 'Rp. '. $row['price']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$sheet->getStyle('A2:D2')->applyFromArray($styleArray);

$i = $i - 1;
$sheet->getStyle('A3:D' . $i)->applyFromArray($styleArray);
$sheet->getStyle('A2:D2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A2:D2')->getFont()->setBold(true);
$headerCellStyle = $sheet->getStyle('A3:D3');
$headerCellStyle->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$headerCellStyle->getFont()->setBold(true);

$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(25);
$sheet->getColumnDimension('C')->setWidth(18);
$sheet->getColumnDimension('D')->setWidth(24);

$writer = new Xlsx($spreadsheet); // Membuat objek writer untuk menyimpan spreadsheet

$filename = 'Report Laporan Menu CoffeeVibes.xlsx'; // Nama file spreadsheet baru
$savePath = __DIR__ . '/' . $filename; // Jalur lengkap untuk menyimpan file

$writer->save($savePath); // Menyimpan spreadsheet dengan jalur lengkap yang ditentukan

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $filename);
readfile($savePath); // Mengirimkan file spreadsheet yang diunduh ke pengguna
?>
