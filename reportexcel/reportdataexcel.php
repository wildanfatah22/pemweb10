<?php
include 'koneksi.php'; //
require 'vendor/autoload.php'; // Memanggil file autoload.php
// Menggunakan namespace dari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Membuat object dengan nama $spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menuliskan nama kolom
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Kelas');
$sheet->setCellValue('D1', 'Alamat');


// Mengambil data pada tabel tb_siswa
$sql = mysqli_query($conn, "select * from tb_siswa"); 
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($sql))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['kelas']);
	$sheet->setCellValue('D'.$i, $row['alamat']);
	$i++;
}


$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \phpoffice\phpspreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet); // Membuat file xlsx
$writer->save('Report Data Siswa.xlsx'); // Menyimpan file dengan nama Report Data Siswa.xlsx
?>