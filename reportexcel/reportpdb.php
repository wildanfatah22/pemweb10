<?php
//membuka koneksi ke database
include "conn.php";
//memanggil library
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//menuliskan nama kolom pada excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Pernah Paud?');
$sheet->setCellValue('G1', 'Pernah TK?');
$sheet->setCellValue('H1', 'No SKHUN Sebelumnya');
$sheet->setCellValue('I1', 'No Ijazah Sebelumnya');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-Cita');
$sheet->setCellValue('L1', 'Nama Lengkap');
$sheet->setCellValue('M1', 'Jenis Kelamin');
$sheet->setCellValue('N1', 'No NISN');
$sheet->setCellValue('O1', 'No NIK');
$sheet->setCellValue('P1', 'Tempat Lahir');
$sheet->setCellValue('Q1', 'Tanggal Lahir');
$sheet->setCellValue('R1', 'Agama');
$sheet->setCellValue('S1', 'Berkebutuhan Khusus');
$sheet->setCellValue('T1', 'Alamat');
$sheet->setCellValue('U1', 'RT');
$sheet->setCellValue('V1', 'RW');
$sheet->setCellValue('W1', 'Nama Dusun');
$sheet->setCellValue('X1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('Y1', 'Nama Kecamatan');
$sheet->setCellValue('Z1', 'Kode Pos');
$sheet->setCellValue('AA1', 'Tempat Tinggal');
$sheet->setCellValue('AB1', 'Moda Transportasi');
$sheet->setCellValue('AC1', 'No HP');
$sheet->setCellValue('AD1', 'No Telp');
$sheet->setCellValue('AE1', 'Email Pribadi');
$sheet->setCellValue('AF1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('AG1', 'No KPS/PKH/KIP');
$sheet->setCellValue('AH1', 'Kewarganegaraan');
$sheet->setCellValue('AI1', 'Asal Negara');

//mengambil data pada database dan menuliskan pada excel
$query = mysqli_query($conn,"select * from datapd");
$i = 2;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['id']);
    $sheet->setCellValue('B'.$i, $row['jdaftar']);
	$sheet->setCellValue('C'.$i, $row['tglmasuk']);
	$sheet->setCellValue('D'.$i, $row['nis']);
	$sheet->setCellValue('E'.$i, $row['nopes']);
	$sheet->setCellValue('F'.$i, $row['paud']);
	$sheet->setCellValue('G'.$i, $row['tk']);
	$sheet->setCellValue('H'.$i, $row['skhun']);
	$sheet->setCellValue('I'.$i, $row['ijazah']);
	$sheet->setCellValue('J'.$i, $row['hobi']);
	$sheet->setCellValue('K'.$i, $row['cita']);
	$sheet->setCellValue('L'.$i, $row['nama']);
	$sheet->setCellValue('M'.$i, $row['jk']);
	$sheet->setCellValue('N'.$i, $row['nisn']);
	$sheet->setCellValue('O'.$i, $row['nik']);
	$sheet->setCellValue('P'.$i, $row['tlahir']);
	$sheet->setCellValue('Q'.$i, $row['tgllahir']);
	$sheet->setCellValue('R'.$i, $row['agama']);
	$sheet->setCellValue('S'.$i, $row['abk']);
	$sheet->setCellValue('T'.$i, $row['alamat']);
	$sheet->setCellValue('U'.$i, $row['rt']);
	$sheet->setCellValue('V'.$i, $row['rw']);
	$sheet->setCellValue('W'.$i, $row['dusun']);
	$sheet->setCellValue('X'.$i, $row['desa']);
	$sheet->setCellValue('Y'.$i, $row['kecamatan']);
	$sheet->setCellValue('Z'.$i, $row['kode_pos']);
	$sheet->setCellValue('AA'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('AB'.$i, $row['transportasi']);
	$sheet->setCellValue('AC'.$i, $row['no_hp']);
	$sheet->setCellValue('AD'.$i, $row['no_telp']);
	$sheet->setCellValue('AE'.$i, $row['email']);
	$sheet->setCellValue('AF'.$i, $row['penerima_kps']);
	$sheet->setCellValue('AG'.$i, $row['nokps']);
	$sheet->setCellValue('AH'.$i, $row['kewarganegaraan']);		
    $sheet->setCellValue('AI'.$i, $row['asalnegara']);	
	$i++;
}

//style
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:Y'.$i)->applyFromArray($styleArray);

//memunculkan file excel
$writer = new Xlsx($spreadsheet);
$writer->save('Report Pendaftaran Siswa Baru.xlsx');
?>