<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta Didik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php 
        $error_tanggal = "";
        $error_jdaftar = "";
        $error_tglmasuk = "";
        $error_nis = "";
        $error_nopes = "";
        $error_tk = "";
        $error_paud = "";
        $error_skhun = "";
        $error_ijazah = "";
        $error_cita = "";
        $error_hobi = "";
        $error_nama = "";
        $error_jk = "";
        $error_nisn = "";
        $error_nik = "";
        $error_tlahir = "";
        $error_tgllahir = "";
        $error_agama = "";
        $error_abk = "";
        $error_alamat = "";
        $error_rt = "";
        $error_rw = "";
        $error_dusun = "";
        $error_desa = "";
        $error_kecamatan = "";
        $error_kode_pos = "";
        $error_tempat_tinggal = "";
        $error_transportasi = "";
        $error_no_hp = "";
        $error_no_telp = "";
        $error_email = "";
        $error_penerima_kps = "";
        $error_nokps = "";
        $error_kewarganegaraan = "";
        $error_asalnegara = "";
        $error_namaAyah = "";
        $error_tgllahirAyah = "";
        $error_pdkAyah = "";
        $error_pkjAyah = "";
        $error_gajiAyah = "";
        $error_abkAyah = "";
        $error_namaibu = "";
        $error_tahunibu = "";
        $error_pdkIbu = "";
        $error_pkjIbu = "";
        $error_gajiIbu = "";
        $error_abkIbu = "";
    
    
    
    
        $tanggal = "";
        $jdaftar = "";
        $tglmasuk = "";
        $nis = "";
        $nopes = "";
        $paud = "";
        $tk = "";
        $skhun = "";
        $ijazah = "";
        $cita = "";
        $hobi = "";
        $nama = "";
        $jk = "";
        $nisn = "";
        $nik = "";
        $tlahir = "";
        $tgllahir = "";
        $agama = "";
        $abk = "";
        $alamat = "";
        $rt = "";
        $rw = "";
        $dusun = "";
        $desa = "";
        $kecamatan = "";
        $kode_pos = "";
        $tempat_tinggal = "";
        $transportasi = "";
        $no_hp = "";
        $no_telp = "";
        $email = "";
        $penerima_kps = "";
        $nokps = "";
        $kewarganegaraan = "";
        $asalnegara = "";
        $namaAyah = "";
        $tgllahirAyah = "";
        $pdkAyah = "";
        $pkjAyah = "";
        $gajiAyah = "";
        $abkAyah = "";
        $namaIbu = "";
        $tgllahirIbu = "";
        $pdkIbu = "";
        $pkjIbu = "";
        $gajiIbu = "";
        $abkIbu = "";
    

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

            if (empty($_POST["tgldftr"])) {
                $error_tanggal = "Tanggal isi belum diisi";
            } else {
                $tanggal = validasi($_POST["tgldftr"]);
                $tanggal = date('Y-m-d', strtotime($tanggal));
                $error_tanggal = "";
            }
        
            if (empty($_POST["jdaftar"])) {
                $error_jdaftar = "Jenis pendaftaran harus di pilih";
            } else {
                $jdaftar = validasi($_POST["jdaftar"]);
                $error_jdaftar = "";
            }
        
            if (empty($_POST["tglmsk"])) {
                $error_tglmasuk = "Tanggal masuk belum diisi";
            } else {
                $tglmasuk = validasi($_POST["tglmsk"]);
                $tglmasuk = date('Y-m-d', strtotime($tglmasuk));
                $error_tglmasuk = "";
            }
        
            if (empty($_POST["nis"])) {
                $error_nis = "NIS tidak boleh kosong";
            } else {
                $nis = validasi($_POST["nis"]);
                if (!is_numeric($nis)) {
                    $error_nis = "NIS hanya boleh diisi menggunakan angka";
                } else {
                    $error_nis = "";
                }
            }
        
            if (empty($_POST["nopes"])) {
                $error_nopes = "Nomor peserta ujian tidak boleh kosong";
            } else {
                $nopes = validasi($_POST["nopes"]);
                if (!is_numeric($nopes)) {
                    $error_nopes = "Nomor peserta ujian hanya boleh diisi menggunakan angka";
                } else {
                    $error_nopes = "";
                }
            }
        
            if (empty($_POST["paud"])) {
                $error_paud = "Belum memilih";
            } else {
                $paud = validasi($_POST["paud"]);
                $error_paud = "";
            }
        
            if (empty($_POST["tk"])) {
                $error_tk = "Belum memilih";
            } else {
                $tk = validasi($_POST["tk"]);
                $error_tk = "";
            }
        
            if (empty($_POST["skhun"])) {
                $error_skhun = "Nomor SKHUN tidak boleh kosong";
            } else {
                $skhun = validasi($_POST["skhun"]);
                if (!is_numeric($skhun)) {
                    $error_skhun = "Nomor SKHUN hanya boleh diisi menggunakan angka";
                } else {
                    $error_skhun = "";
                }
            }
        
            if (empty($_POST["ijazah"])) {
                $error_ijazah = "Nomor Ijazah tidak boleh kosong";
            } else {
                $ijazah = validasi($_POST["ijazah"]);
                if (!is_numeric($ijazah)) {
                    $error_ijazah = "Nomor Ijazah hanya boleh diisi menggunakan angka";
                } else {
                    $error_ijazah = "";
                }
            }
        
            if (!isset($_POST["hobi"])) {
                $error_hobi = "Hobi belum dipilih";
            } else {
                $hobi = validasi($_POST["hobi"]);
            }
        
            if (!isset($_POST["cita"])) {
                $error_cita = "Cita-cita belum dipilih";
            } else {
                $cita = validasi($_POST["cita"]);
            }
        
            if (empty($_POST["nama"])) {
                $error_nama = "Nama tidak boleh kosong";
            } else {
                $nama = validasi($_POST["nama"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                    $error_nama = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_nama = "";
                }
            }
        
            if (empty($_POST["jk"])) {
                $error_jk = "jenis Kelamin harus di pilih";
            } else {
                $jk = validasi($_POST["jk"]);
                $error_jk = "";
            }
        
            if (empty($_POST["nisn"])) {
                $error_nisn = "NISN tidak boleh kosong";
            } else {
                $nisn = validasi($_POST["nisn"]);
                if (!is_numeric($nisn)) {
                    $error_nisn = "NISN hanya boleh diisi menggunakan angka";
                } else {
                    $error_nisn = "";
                }
            }
        
            if (empty($_POST["nik"])) {
                $error_nik = "NIK tidak boleh kosong";
            } else {
                $nik = validasi($_POST["nik"]);
                if (!is_numeric($nik)) {
                    $error_nik = "NIK hanya boleh diisi menggunakan angka";
                } else {
                    $error_nik = "";
                }
            }
        
            if (empty($_POST["tlahir"])) {

                $error_tlahir = "Tempat lahir tidak boleh kosong";
            } else {
                $tlahir = validasi($_POST["tlahir"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $tlahir)) {
                    $error_tlahir = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_tlahir = "";
                }
            }
        
            if (empty($_POST["tgllhr"])) {
                $error_tgllahir = "Tanggal lahir kosong";
            } else {
                $tgllahir = validasi($_POST["tgllhr"]);
                $tgllahir = date('Y-m-d', strtotime($tgllahir));
                $error_tgllahir = "";
            }
        
            if (!isset($_POST["agama"])) {
                $error_agama = "Agama harus dipilih";
            } else {
                $agama = validasi($_POST["agama"]);
            }
        
            if (!isset($_POST["abk"])) {
                $error_abk = "Berkebutuhan harus dipilih";
            } else {
                $abk = validasi($_POST["abk"]);
            }
        
            if (empty($_POST["alamat"])) {
                $error_alamat = "Alamat tidak boleh kosong";
            } else {
                $alamat = validasi($_POST["alamat"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $alamat)) {

                    $error_alamat = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_alamat = "";
                }
            }
        
            if (empty($_POST["rt"])) {
                $error_rt = "RT tidak boleh kosong";
            } else {
                $rt = validasi($_POST["rt"]);
                if (!is_numeric($rt)) {
                    $error_rt = "RT hanya boleh diisi menggunakan angka";
                } else {
                    $error_rt = "";
                }
            }
        
            if (empty($_POST["rw"])) {
                $error_rw = "RW tidak boleh kosong";
            } else {
                $rw = validasi($_POST["rw"]);
                if (!is_numeric($rw)) {
                    $error_rw = "RW hanya boleh diisi menggunakan angka";
                } else {
                    $error_rw = "";
                }
            }
        
            if (empty($_POST["kode_pos"])) {
                $error_kode_pos = "kode_pos tidak boleh kosong";
            } else {
                $kode_pos = validasi($_POST["kode_pos"]);
                if (!is_numeric($kode_pos)) {
                    $error_kode_pos = "kode_pos hanya boleh diisi menggunakan angka";
                } else {
                    $error_kode_pos = "";
                }
            }
        
            if (empty($_POST["no_hp"])) {
                $error_no_hp = "Nomor HP tidak boleh kosong";
            } else {
                $no_hp = validasi($_POST["no_hp"]);
                if (!is_numeric($no_hp)) {
                    $error_no_hp = "Nomor HP hanya boleh diisi menggunakan angka";
                } else {
                    $error_no_hp = "";
                }
            }
        
            if (empty($_POST["no_telp"])) {
                $error_no_telp = "Telephone tidak boleh kosong";
            } else {
                $no_telp = validasi($_POST["no_telp"]);
                if (!is_numeric($no_telp)) {
                    $error_no_telp = "Nomor Telephone hanya boleh diisi menggunakan angka";
                } else {
                    $error_no_telp = "";
                }
            }
        
            if (empty($_POST["nokps"])) {
                $error_nokps = "tidak boleh kosong";
            } else {
                $nokps = validasi($_POST["nokps"]);
                if (!is_numeric($nokps)) {
                    $error_nokps = "hanya boleh diisi menggunakan angka";
                } else {
                    $error_nokps = "";
                }
            }
        
            if (empty($_POST["dusun"])) {
                $error_dusun = "Dusun tidak boleh kosong";
            } else {
                $dusun = validasi($_POST["dusun"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) {

                    $error_dusun = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_dusun = "";
                }
            }
        
            if (empty($_POST["desa"])) {
                $error_desa = "Desa tidak boleh kosong";
            } else {
                $desa = validasi($_POST["desa"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $desa)) {

                    $error_desa = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_desa = "";
                }
            }
        
            if (empty($_POST["kecamatan"])) {
                $error_kecamatan = "Kecamatan tidak boleh kosong";
            } else {
                $kecamatan = validasi($_POST["kecamatan"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) {

                    $error_kecamatan = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_kecamatan = "";
                }
            }
        
            if (empty($_POST["asalnegara"])) {
                $error_asalnegara = "Nama Negara tidak boleh kosong";
            } else {
                $asalnegara = validasi($_POST["asalnegara"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $asalnegara)) {

                    $error_asalnegara = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_asalnegara = "";
                }
            }
        
            if (empty($_POST["namaAyah"])) {
                $error_namaAyah = "Nama Ayah tidak boleh kosong";
            } else {
                $namaAyah = validasi($_POST["namaAyah"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $namaAyah)) {
                    $error_namaAyah = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_namaAyah = "";
                }
            }
        
            if (empty($_POST["namaIbu"])) {
                $error_namaibu = "Nama Ibu tidak boleh kosong";
            } else {
                $namaIbu = validasi($_POST["namaIbu"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $namaIbu)) {

                    $error_namaibu = "Karakter hanya bisa menggunakan huruf";
                } else {
                    $error_namaibu = "";
                }
            }
        
            if (empty($_POST["tgllahirAyah"])) {
                $error_tgllahirAyah = "Tahun Lahir Ayah tidak boleh kosong";
            } else {
                $tgllahirAyah = validasi($_POST["tgllahirAyah"]);
                if (!is_numeric($tgllahirAyah)) {
                    $error_tgllahirAyah = "Tidak Sesuai";
                } else {
                    $error_tgllahirAyah = "";
                }
            }
        
            if (empty($_POST["tgllahirIbu"])) {
                $error_tahunibu = "Tahun Lahir Ibu tidak boleh kosong";
            } else {
                $tgllahirIbu = validasi($_POST["tgllahirIbu"]);
                if (!is_numeric($tgllahirIbu)) {
                    $error_tahunibu = "Tidak Sesuai";
                } else {
                    $error_tahunibu = "";
                }
            }
        
            if (empty($_POST["email"])) {
                $error_email = "Email tidak boleh kosong";
            } else {
                $email = validasi($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_email = "Format Email tidak valid";
                } else {
                    $error_email = "";
                }
            }
        
            if (empty($_POST["kewarganegaraan"])) {
                $error_kewarganegaraan = "Belum memilih";
            } else {
                $kewarganegaraan = validasi($_POST["kewarganegaraan"]);
                $error_kewarganegaraan = "";
            }
        
            if (empty($_POST["penerima_kps"])) {
                $error_penerima_kps = "Belum memilih";
            } else {
                $penerima_kps = validasi($_POST["penerima_kps"]);
                $error_penerima_kps = "";
            }
        
            if (!isset($_POST["tempat_tinggal"])) {
                $error_tempat_tinggal = "Tempat Tinggal harus dipilih";
            } else {
                $tempat_tinggal = validasi($_POST["tempat_tinggal"]);
            }
        
            if (!isset($_POST["transportasi"])) {
                $error_transportasi = "Moda Transportasi harus dipilih";
            } else {
                $transportasi = validasi($_POST["transportasi"]);
            }
        
            if (!isset($_POST["pdkAyah"])) {
                $error_pdkAyah = "Riwayat pendidikan ayah harus dipilih";
            } else {
                $pdkAyah = validasi($_POST["pdkAyah"]);
            }
        
            if (!isset($_POST["pkjAyah"])) {
                $error_pkjAyah = "Pekerjaan ayah harus dipilih";
            } else {
                $pkjAyah = validasi($_POST["pkjAyah"]);
            }
        
            if (!isset($_POST["gajiAyah"])) {
                $error_gajiAyah = "Penghasilan ayah harus dipilih";
            } else {
                $gajiAyah = validasi($_POST["gajiAyah"]);
            }
        
            if (!isset($_POST["abkAyah"])) {
                $error_abkAyah = "Kebutuhan khusus ayah harus dipilih";
            } else {
                $abkAyah = validasi($_POST["abkAyah"]);
            }
        
            if (!isset($_POST["pdkIbu"])) {
                $error_pdkIbu = "Riwayat pendidikan ibu harus dipilih";
            } else {
                $pdkIbu = validasi($_POST["pdkIbu"]);
            }
        
            if (!isset($_POST["pkjIbu"])) {
                $error_pkjIbu = "Pekerjaan ibu harus dipilih";
            } else {
                $pkjIbu = validasi($_POST["pkjIbu"]);
            }
        
            if (!isset($_POST["gajiIbu"])) {
                $error_gajiIbu = "Penghasilan ibu harus dipilih";
            } else {
                $gajiIbu = validasi($_POST["gajiIbu"]);
            }
        
            if (!isset($_POST["abkIbu"])) {
                $error_abkIbu = "Kebutuhan khusus ibu harus dipilih";
            } else {
                $abkIbu = validasi($_POST["abkIbu"]);
            }
        


        if (
            $error_tanggal == "" &&
            $error_jdaftar == "" &&
            $error_tglmasuk == "" &&
            $error_nis == "" &&
            $error_nopes == "" &&
            $error_paud == "" &&
            $error_tk == "" &&
            $error_skhun == "" &&
            $error_ijazah == "" &&
            $error_hobi == "" &&
            $error_cita == "" &&
            $error_nama == "" &&
            $error_jk == "" &&
            $error_nisn == "" &&
            $error_nik == "" &&
            $error_tlahir == "" &&
            $error_tgllahir == "" &&
            $error_agama == "" &&
            $error_abk == "" &&
            $error_alamat == "" &&
            $error_rt == "" &&
            $error_rw == "" &&
            $error_dusun == "" &&
            $error_desa == "" &&
            $error_kecamatan == "" &&
            $error_kode_pos == "" &&
            $error_tempat_tinggal == "" &&
            $error_transportasi == "" &&
            $error_no_hp == "" &&
            $error_no_telp == "" &&
            $error_email == "" &&
            $error_penerima_kps == "" &&
            $error_nokps == "" &&
            $error_kewarganegaraan == "" 
        ) {
            include 'koneksi.php';
            $sql = "INSERT INTO datapd SET tanggal='$tanggal',
            jdaftar='$jdaftar',
            tglmasuk='$tglmasuk',
            nis='$nis',
            nopes='$nopes',
            paud='$paud',
            tk='$tk',
            skhun='$skhun',
            ijazah='$ijazah',
            hobi='$hobi',
            cita='$cita',
            nama='$nama',
            jk='$jk',
            nisn='$nisn',
            nik='$nik',
            tlahir='$tlahir',
            tgllahir='$tgllahir',
            agama='$agama',
            abk='$abk',
            alamat='$alamat',
            rt='$rt',
            rw='$rw',
            dusun='$dusun',
            desa='$desa',
            kecamatan='$kecamatan',
            kode_pos='$kode_pos',
            tempat_tinggal='$tempat_tinggal',
            transportasi='$transportasi',
            no_hp='$no_hp',
            no_telp='$no_telp',
            email='$email',
            penerima_kps='$penerima_kps',
            nokps='$nokps',
            kewarganegaraan='$kewarganegaraan',
            asalnegara='$asalnegara',
            namaAyah='$namaAyah',
            tgllahirAyah='$tgllahirAyah',
            pdkAyah='$pdkAyah',
            pkjAyah='$pkjAyah',
            gajiAyah='$gajiAyah',
            abkAyah='$abkAyah',
            namaIbu='$namaIbu', 
            tgllahirIbu='$tgllahirIbu', 
            pdkIbu='$pdkIbu', 
            pkjIbu='$pkjIbu', 
            gajiIbu='$gajiIbu', 
            abkIbu='$abkIbu'";
            mysqli_query($conn, $sql);;
            header("location:registrasipesertadidik.php");
        }
    }

    function validasi($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>
    <div class="container">
        <div class="row">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h2 class="alert alert-primary text-center mt-3">FORMULIR PESERTA DIDIK</h2>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="tanggalpengisian" class="col-form-label"> Tanggal Pengisian</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="tgldftr" id="tgldftr" class="form-control <?php echo ($error_tanggal != "" ? "is_invalid" : ""); ?>" value="<?php echo $tanggal; ?>">
                        <span class="warning"><?php echo $error_tanggal; ?></span>
                    </div>

                </div>

                <h4 class="alert alert-primary  mt-3">Registrasi Peserta didik</h4>
                <div class="datapeserta">

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="jdaftar" class="col-form-label"> Jenis Pendaftaran</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" name="jdaftar" id="jp" class="form-check-input" value="Siswa Baru" <?php if (isset($jdaftar) && $jdaftar == "Siswa Baru") echo "checked"; ?>>
                                <label for="Siswa Baru">Siswa Baru</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="jdaftar" id="jp" class="form-check-input" value="Pindahan" <?php if (isset($jdaftar) && $jdaftar == "Pindahan") echo "checked"; ?>>
                                <label for="Siswa Baru">Pindahan</label>
                            </div>
                            <span class="warning"><?php echo $error_jdaftar; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tglmasuk" class="col-form-label"> Tanggal Masuk Sekolah</label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="tglmsk" id="tglmsk" class="form-control <?php echo ($error_tglmasuk != "" ? "is_invalid" : ""); ?>" value="<?php echo $tglmasuk; ?>">
                            <span class="warning"><?php echo $error_tglmasuk; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nis" class="col-form-label"> NIS</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($nis != "" ? "is_invalid" : ""); ?>" value="<?php echo $nis; ?>" placeholder="Masukan NIS Anda">
                            <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nopes" class="col-form-label"> Nomor Peserta Ujian</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nopes" id="nopes" class="form-control <?php echo ($nopes != "" ? "is_invalid" : ""); ?>" value="<?php echo $nopes; ?>" placeholder="Masukan Nomor Peserta Ujian Anda">
                            <div id="nopesketerangan" class="form-text">**Nomor peserta ujian adalah 20 digit yang tertera dalam sertifikat
                                <span class="text-danger">SKHUN SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div>
                            <span class="warning"><?php echo $error_nopes; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="paud" class="col-form-label"> Apakah Pernah Paud</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" name="paud" id="paud" class="form-check-input" value="Ya" <?php if (isset($paud) && $paud == "Ya") echo "checked"; ?>>
                                <label for="paud">Ya</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="paud" id="paud" class="form-check-input" value="Tidak" <?php if (isset($paud) && $paud == "Tidak") echo "checked"; ?>>
                                <label for="paud">Tidak</label>
                            </div>
                            <span class="warning"><?php echo $error_paud; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tk" class="col-form-label"> Apakah Pernah TK</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" name="tk" id="tk" class="form-check-input" value="Ya" <?php if (isset($tk) && $tk == "Ya") echo "checked"; ?>>
                                <label for="tk">Ya</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="tk" id="tk" class="form-check-input" value="Tidak" <?php if (isset($tk) && $tk == "Tidak") echo "checked"; ?>>
                                <label for="tk">Tidak</label>
                            </div>
                            <span class="warning"><?php echo $error_tk; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="skhun" class="col-form-label"> Nomor seri SKHUN sebelumnya</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="skhun" id="skhun" class="form-control <?php echo ($skhun != "" ? "is_invalid" : ""); ?>" value="<?php echo $skhun; ?>" placeholder="Masukan Nomor SKHUN">
                            <div id="skhunketerangan" class="form-text">diisi 16 digit yang tertera di
                                <span class="text-danger">SKHUN SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div>
                            <span class="warning"><?php echo $error_skhun; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="ijazah" class="col-form-label"> Nomor seri IJAZAH sebelumnya</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="ijazah" id="ijazah" class="form-control  <?php echo ($ijazah != "" ? "is_invalid" : ""); ?>" value="<?php echo $ijazah; ?>" placeholder="Masukan Nomor Ijazah">
                            <div id="ijazahketerangan" class="form-text">diisi 16 digit yang tertera di
                                <span class="text-danger">IJAZAH SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div><span class="warning"><?php echo $error_ijazah; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="hobi" class="col-form-label"> Hobi</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" name="hobi">
                                <option selected disabled value="">Pilih...</option>
                                <option value="Olahraga" <?php if (isset($hobi) && $hobi == "Olahraga") echo "selected"; ?>>Olahraga</option>
                                <option value="Kesenian" <?php if (isset($hobi) && $hobi == "Kesenian") echo "selected"; ?>>Kesenian</option>
                                <option value="Membaca" <?php if (isset($hobi) && $hobi == "Membaca") echo "selected"; ?>>Membaca</option>
                                <option value="Menulis" <?php if (isset($hobi) && $hobi == "Menulis") echo "selected"; ?>>Menulis</option>
                                <option value="Travelling" <?php if (isset($hobi) && $hobi == "Travelling") echo "selected"; ?>>Travelling</option>
                                <option value="Lainya" <?php if (isset($hobi) && $hobi == "Lainya") echo "selected"; ?>>Lainya</option>
                            </select>
                            <span class="warning"><?php echo $error_hobi; ?></span>

                        </div>

                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="cita" class="col-form-label"> Cita-cita</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" name="cita">
                                <option selected disabled value="">Pilih...</option>
                                <option value="PNS" <?php if (isset($cita) && $cita == "PNS") echo "selected"; ?>>PNS</option>
                                <option value="TNI/Porli" <?php if (isset($cita) && $cita == "TNI?Porli") echo "selected"; ?>>TNI/Porli</option>
                                <option value="Guru/Dosen" <?php if (isset($cita) && $cita == "Guru/Dosen") echo "selected"; ?>>Guru/Dosen</option>
                                <option value="Dokter" <?php if (isset($cita) && $cita == "Dokter") echo "selected"; ?>>Dokter</option>
                                <option value="Politikus" <?php if (isset($cita) && $cita == "Politikus") echo "selected"; ?>>Politikus</option>
                                <option value="Wiraswasta" <?php if (isset($cita) && $cita == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                <option value="Seni/lukis/artis/sejenisnya" <?php if (isset($cita) && $cita == "Seni/lukis/artis/sejenisnya") echo "selected"; ?>>Seni/lukis/artis/sejenisnya</option>
                                <option value="Lainya" <?php if (isset($cita) && $cita == "Lainya") echo "selected"; ?>>Lainya</option>
                            </select>
                            <span class="warning"><?php echo $error_cita; ?></span>
                        </div>
                    </div><br>
                </div>

                <h4 class="alert alert-primary  mt-3">Data Pribadi</h4>
                <div class="datapribadi">

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nama" class="col-form-label "> Nama</label>
                        </div>
                        <div class="col-md-6">

                            <input type="text" name="nama" id="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?> " value="<?php echo $nama; ?>" placeholder="Masukan nama Anda">
                            <span class="warning"><?php echo $error_nama; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="jk" class="col-form-label"> Jenis Kelamin</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" name="jk" id="jk" class="form-check-input" value="Laki-Laki" <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?>>
                                <label for="jk">Laki-Laki</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="jk" id="jk" class="form-check-input" value="Perempuan" <?php if (isset($jk) && $jk == "Perempuan") echo "checked"; ?>>
                                >
                                <label for="jk">Perempuan</label>
                            </div>
                            <span class="warning"><?php echo $error_jk; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nisn" class="col-form-label"> NISN</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nisn" id="nisn" class="form-control <?php echo ($nisn != "" ? "is_invalid" : ""); ?>" value="<?php echo $nisn; ?>" placeholder="Masukan NISN Anda">
                            <span class="warning"><?php echo $error_nisn; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nik" class="col-form-label  "> NIK</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nik" id="nik" class="form-control <?php echo ($nik != "" ? "is_invalid" : ""); ?>" value="<?php echo $nik; ?>" placeholder="Masukan NIK Anda">
                            <span class="warning"><?php echo $error_nik; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tlahir" class="col-form-label"> Tempat Lahir</label>
                        </div>
                        <div class="col-md-6">

                            <input type="text" name="tlahir" id="tlahir" class="form-control  <?php echo ($error_tlahir != "" ? "is-invalid" : ""); ?>" value="<?php echo $tlahir; ?>" placeholder="Masukan Tempat Lahir Anda">
                            <span class="warning"><?php echo $error_tlahir; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tgllahir" class="col-form-label"> Tanggal Lahir</label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="tgllhr" id="tgllhr" class="form-control <?php echo ($error_tgllahir != "" ? "is_invalid" : ""); ?>" value="<?php echo $tgllahir; ?>">
                            <span class="warning"><?php echo $error_tgllahir; ?></span>
                        </div>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="agama" class="col-form-label"> Agama </label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="agama">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Islam" <?php if (isset($agama) && $agama == "Islam") echo "selected"; ?>>Islam</option>
                            <option value="Kristen" <?php if (isset($agama) && $agama == "Kristen") echo "selected"; ?>>Kristen</option>
                            <option value="Katholik" <?php if (isset($agama) && $agama == "Katholik") echo "selected"; ?>>Katholik</option>
                            <option value="Hindu" <?php if (isset($agama) && $agama == "Hindu") echo "selected"; ?>>Hindu</option>
                            <option value="Budha" <?php if (isset($agama) && $agama == "Budha") echo "selected"; ?>>Budha</option>
                            <option value="Konghucu" <?php if (isset($agama) && $agama == "Konghucu") echo "selected"; ?>>Konghucu</option>
                            <option value="Lainya" <?php if (isset($agama) && $agama == "Lainya") echo "selected"; ?>>Lainya</option>
                        </select>
                        <span class="warning"><?php echo $error_agama; ?></span>

                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="abk" class="col-form-label"> Berkebutuhan Khusus </label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="abk">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Tidak" <?php if (isset($abk) && $abk == "Tidak") echo "selected"; ?>>Tidak</option>
                            <option value="Netra" <?php if (isset($abk) && $abk == "Netra") echo "selected"; ?>>Netra</option>
                            <option value="Rungu" <?php if (isset($abk) && $abk == "Rungu") echo "selected"; ?>>Rungu</option>
                            <option value="Grahita ringan" <?php if (isset($abk) && $abk == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                            <option value="Grahita sedang" <?php if (isset($abk) && $abk == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                            <option value="Daksa ringan" <?php if (isset($abk) && $abk == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                            <option value="Daksa sedang" <?php if (isset($abk) && $abk == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                            <option value="Laras" <?php if (isset($abk) && $abk == "Laras") echo "selected"; ?>>Laras</option>
                            <option value="Wicara" <?php if (isset($abk) && $abk == "Wicara") echo "selected"; ?>>Wicara</option>
                            <option value="Tuna ganda" <?php if (isset($abk) && $abk == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                            <option value="Hiperaktif" <?php if (isset($abk) && $abk == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                            <option value="Cerdas Istimewa" <?php if (isset($abk) && $abk == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                            <option value="Bakat Istimewa" <?php if (isset($abk) && $abk == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                            <option value="Kesulitan Belajar" <?php if (isset($abk) && $abk == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                            <option value="Narkoba" <?php if (isset($abk) && $abk == "Narkoba") echo "selected"; ?>>Narkoba</option>
                            <option value="Indigo" <?php if (isset($abk) && $abk == "Indigo") echo "selected"; ?>>Indigo</option>
                            <option value="Down Sindrome" <?php if (isset($abk) && $abk == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                            <option value="Autis" <?php if (isset($abk) && $abk == "Autis") echo "selected"; ?>>Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_abk; ?></span>

                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="alamat" class="col-form-label"> Alamat</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="alamat" id="alamat" class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" value="<?php echo $alamat; ?>" placeholder="Alamat">
                        <span class="warning"><?php echo $error_alamat; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="rt" class="col-form-label"> RT</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="rt" id="rt" class="form-control <?php echo ($error_rt != "" ? "is-invalid" : ""); ?>" maxlength="3" value="<?php echo $rt; ?>" placeholder="RT">
                        <span class="warning"><?php echo $error_rt; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="rw" class="col-form-label >"> RW </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="rw" id="rw" class="form-control <?php echo ($error_rw != "" ? "is-invalid" : ""); ?>" maxlength="3" value="<?php echo $rw; ?>" placeholder="RW">
                        <span class="warning"><?php echo $error_rw; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="dusun" class="col-form-label"> Dusun</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="dusun" id="dusun" class="form-control <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $dusun; ?>" placeholder="Dusun">
                        <span class="warning"><?php echo $error_dusun; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="desa" class="col-form-label"> Kelurahan/Desa</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="desa" id="desa" class="form-control <?php echo ($error_desa != "" ? "is-invalid" : ""); ?>" value="<?php echo $desa; ?>" placeholder="Kelurahan/Desa">
                        <span class="warning"><?php echo $error_desa; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kecamatan" class="col-form-label"> Kecamatan</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?>" value="<?php echo $kecamatan; ?>" placeholder="Kecamatan">
                        <span class="warning"><?php echo $error_kecamatan; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kode_pos" class="col-form-label"> Kode Pos</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control <?php echo ($error_kode_pos != "" ? "is-invalid" : ""); ?>" maxlength="5" value="<?php echo $kode_pos; ?>" placeholder="Kode Pos">
                        <span class="warning"><?php echo $error_kode_pos; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="tempat_tinggal" class="col-form-label"> Tempat Tinggal </label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="tempat_tinggal">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Bersama Orang Tua" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Bersama Orang Tua") echo "selected"; ?>>Bersama Orang Tua</option>
                            <option value="Wali" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Wali") echo "selected"; ?>>Wali</option>
                            <option value="Kos" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Kos") echo "selected"; ?>>Kos</option>
                            <option value="Asrama" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Asrama") echo "selected"; ?>>Asrama</option>
                            <option value="Panti Asuhan" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Panti Asuhan") echo "selected"; ?>>Panti Asuhan</option>
                            <option value="Lainnya" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Lainya") echo "selected"; ?>>Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_tempat_tinggal; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="transportasi" class="col-form-label"> Moda Transportasi </label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="transportasi">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Jalan Kaki" <?php if (isset($transportasi) && $transportasi == "Jalan Kaki") echo "selected"; ?>>Jalan Kaki</option>
                            <option value="Kendaraan Pribadi" <?php if (isset($transportasi) && $transportasi == "Kendaraan Pribadi") echo "selected"; ?>>Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum" <?php if (isset($transportasi) && $transportasi == "Kendaraan Umum") echo "selected"; ?>>Kendaraan Umum</option>
                            <option value="Jemputan Sekolah" <?php if (isset($transportasi) && $transportasi == "Jemputan Sekolah") echo "selected"; ?>>Jemputan Sekolah</option>
                            <option value="Kereta Api" <?php if (isset($transportasi) && $transportasi == "Kereta Api") echo "selected"; ?>>Kereta Api</option>
                            <option value="Ojek" <?php if (isset($transportasi) && $transportasi == "Ojek") echo "selected"; ?>>Ojek</option>
                            <option value="Andong/Bendi/Sado/Dokar" <?php if (isset($transportasi) && $transportasi == "Andong/Bendi/Sado/Dokar") echo "selected"; ?>>Andong/Bendi/Sado/Dokar</option>
                            <option value="Perahu Penyebrangan" <?php if (isset($transportasi) && $transportasi == "Perahu Penyebrangan") echo "selected"; ?>>Perahu Penyebrangan</option>
                            <option value="Lainnya" <?php if (isset($transportasi) && $transportasi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_transportasi; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="no_hp" class="col-form-label"> Nomor Handphone </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="no_hp" id="no_hp" class="form-control <?php echo ($error_no_hp != "" ? "is-invalid" : ""); ?>" maxlength="13" value="<?php echo $no_hp;  ?>" placeholder="Masukkan Nomor HP Anda...">
                        <span class="warning"><?php echo $error_no_hp; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="no_telp" class="col-form-label"> Nomor telepon </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="no_telp" id="no_telp" class="form-control <?php echo ($error_no_telp != "" ? "is-invalid" : ""); ?>" maxlength="13" value="<?php echo $no_telp;  ?>" placeholder="Masukkan Nomor Telepon Anda...">
                        <span class="warning"><?php echo $error_no_telp; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="email" class="col-form-label"> Email Pribadi </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" id="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $email;  ?>" placeholder="Email">
                        <span class="warning"><?php echo $error_email;  ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="penerima_kps" class="col-form-label"> Penerima PKH/KIS/KIP</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check-inline">
                            <input type="radio" name="penerima_kps" id="penerima_kps" class="form-check-input" value="Ya" <?php if (isset($penerima_kps) && $penerima_kps == "Ya") echo "checked"; ?>>
                            <label for="penerima_kps">Ya</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="penerima_kps" id="nokps" class="form-check-input" value="Tidak" <?php if (isset($penerima_kps) && $penerima_kps == "Tidak") echo "checked"; ?>>
                            <label for="penerima_kps">Tidak</label>
                        </div>
                        <span class="warning"><?php echo $error_penerima_kps; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="nokps" class="col-form-label"> Nomor KPS/PKH/KIP </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nokps" id="nokps" class="form-control  <?php echo ($error_nokps != "" ? "is-invalid" : ""); ?>" maxlength="20" value="<?php echo $nokps;  ?>" placeholder="Nomor KPS/PKH/KIP">
                        <div id="nokpsketerangan" class="form-text">jika tidak mepunyai diisi 000000
                        </div>
                        <span class="warning"><?php echo $error_nokps; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kewarganegaraan" class="col-form-label"> Kewarganegaraan </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check-inline">
                            <input type="radio" name="kewarganegaraan" id="kewarganegaraan" class="form-check-input" value="WNI" <?php if (isset($kewarganegaraan) && $kewarganegaraan == "WNI") echo "checked"; ?>>
                            <label for="kewarganegaraan">Warga Negara Indonesia (WNI)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="kewarganegaraan" id="kewarganegaraan" class="form-check-input" value="WNA" <?php if (isset($kewarganegaraan) && $kewarganegaraan == "WNA") echo "checked"; ?>>
                            <label for="kewarganegaraan">Warga Negara Asing (WNA)</label>
                        </div>
                        <span class="warning"><?php echo $error_kewarganegaraan; ?></span>

                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="asalnegara" class="col-form-label"> Nama Negara </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="asalnegara" id="asalnegara" class="form-control <?php echo ($error_asalnegara != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $asalnegara; ?>" placeholder="Asal Negara">
                        <span class="warning"><?php echo $error_asalnegara; ?></span>
                    </div>
                </div><br>
        </div>

        <h4 class="alert alert-primary  mt-3">Data Ayah Kandung</h4>
        <div class="ayah">

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="namaAyah" class="col-form-label"> Nama Ayah Kandung </label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="namaAyah" id="namaAyah" class="form-control <?php echo ($error_namaAyah != "" ? "is-invalid" : ""); ?>" maxlength="40" value="<?php echo $namaAyah; ?>" placeholder="Masukan Nama Ayah Anda">
                    <span class="warning"><?php echo $error_namaAyah; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="tgllahirAyah" class="col-form-label"> Tahun Lahir </label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="tgllahirAyah" id="tgllahirAyah" class="form-control <?php echo ($error_tgllahirAyah != "" ? "is-invalid" : ""); ?>" maxlength="4" value="<?php echo $tgllahirAyah; ?>" placeholder="Masukan Tahun Lahir Ayah Anda">
                    <span class="warning"><?php echo $error_tgllahirAyah; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="rwytpdkAyah" class="col-form-label"> Riwayat Pendikan </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="pdkAyah">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Sekolah" <?php if (isset($pdkAyah) && $pdkAyah == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                        <option value="Putus Sekolah" <?php if (isset($pdkAyah) && $pdkAyah == "Putus Sekolah") echo "selected"; ?>>Putus Sekolah</option>
                        <option value="SD Sederajat" <?php if (isset($pdkAyah) && $pdkAyah == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                        <option value="SMP Sederajat" <?php if (isset($pdkAyah) && $pdkAyah == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                        <option value="SMA Sederajat" <?php if (isset($pdkAyah) && $pdkAyah == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                        <option value="D1" <?php if (isset($pdkAyah) && $pdkAyah == "D1") echo "selected"; ?>>D1</option>
                        <option value="D2" <?php if (isset($pdkAyah) && $pdkAyah == "D2") echo "selected"; ?>>D2</option>
                        <option value="D3" <?php if (isset($pdkAyah) && $pdkAyah == "D3") echo "selected"; ?>>D3</option>
                        <option value="D4/S1" <?php if (isset($pdkAyah) && $pdkAyah == "D4/S1") echo "selected"; ?>>D4/S1</option>
                        <option value="S2" <?php if (isset($pdkAyah) && $pdkAyah == "S2") echo "selected"; ?>>S2</option>
                        <option value="S3" <?php if (isset($pdkAyah) && $pdkAyah == "S3") echo "selected"; ?>>S3</option>
                    </select>
                    <span class="warning"><?php echo $error_pdkAyah; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="pekerjaaanayah" class="col-form-label"> Pekerjaan ayah </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="pkjAyah">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Bekerja" <?php if (isset($pkjAyah) && $pkjAyah == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                        <option value="Nelayan" <?php if (isset($pkjAyah) && $pkjAyah == "Nelayan") echo "selected"; ?>>Nelayan</option>
                        <option value="Petani" <?php if (isset($pkjAyah) && $pkjAyah == "Petani") echo "selected"; ?>>Petani</option>
                        <option value="Peternak" <?php if (isset($pkjAyah) && $pkjAyah == "Peternak") echo "selected"; ?>>Peternak</option>
                        <option value="PNS/TNI/Porli" <?php if (isset($pkjAyah) && $pkjAyah == "PNS/TNI/Porli") echo "selected"; ?>>PNS/TNI/Polri</option>
                        <option value="Karyawan Swasta" <?php if (isset($pkjAyah) && $pkjAyah == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                        <option value="Pedagang Kecil" <?php if (isset($pkjAyah) && $pkjAyah == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                        <option value="Pedagang Besar" <?php if (isset($pkjAyah) && $pkjAyah == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                        <option value="Wiraswasta" <?php if (isset($pkjAyah) && $pkjAyah == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                        <option value="Wirausaha" <?php if (isset($pkjAyah) && $pkjAyah == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                        <option value="Pensiunan" <?php if (isset($pkjAyah) && $pkjAyah == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                        <option value="Lainnya" <?php if (isset($pkjAyah) && $pkjAyah == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                    <span class="warning"><?php echo $error_pkjAyah; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="gajiAyah" class="col-form-label"> Penghasilan ayah </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="gajiAyah">
                        <option selected disabled value="">Pilih...</option>
                        <option value="kurang dari 500.000" <?php if (isset($gajiAyah) && $gajiAyah == "kurang dari 500.000") echo "selected"; ?>>kurang dari 500.000</option>
                        <option value="500.000 - 999.999" <?php if (isset($gajiAyah) && $gajiAyah == "500.000 - 999.999") echo "selected"; ?>>500.000 - 999.999</option>
                        <option value="1 juta - 1.999.999" <?php if (isset($gajiAyah) && $gajiAyah == "1 juta - 1.999.999") echo "selected"; ?>>1 juta - 1.999.999</option>
                        <option value="2 juta - 4.999.999" <?php if (isset($gajiAyah) && $gajiAyah == "2 juta - 4.999.999") echo "selected"; ?>>2 juta - 4.999.999</option>
                        <option value="5 juta - 20 juta" <?php if (isset($gajiAyah) && $gajiAyah == "5 juta - 20 juta") echo "selected"; ?>>5 juta - 20 juta</option>
                        <option value="Lebih dari 20 juta" <?php if (isset($gajiAyah) && $gajiAyah == "Lebih dari 20 juta") echo "selected"; ?>>Lebih dari 20 juta</option>
                    </select>
                    <span class="warning"><?php echo $error_gajiAyah; ?></span>

                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="abkAyah" class="col-form-label"> Berkebutuhan Khusus </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="abkAyah">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak" <?php if (isset($abkAyah) && $abkAyah == "Tidak") echo "selected"; ?>>Tidak</option>
                        <option value="Netra" <?php if (isset($abkAyah) && $abkAyah == "Netra") echo "selected"; ?>>Netra</option>
                        <option value="Rungu" <?php if (isset($abkAyah) && $abkAyah == "Rungu") echo "selected"; ?>>Rungu</option>
                        <option value="Grahita ringan" <?php if (isset($abkAyah) && $abkAyah == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                        <option value="Grahita sedang" <?php if (isset($abkAyah) && $abkAyah == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                        <option value="Daksa ringan" <?php if (isset($abkAyah) && $abkAyah == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                        <option value="Daksa sedang" <?php if (isset($abkAyah) && $abkAyah == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                        <option value="Laras" <?php if (isset($abkAyah) && $abkAyah == "Laras") echo "selected"; ?>>Laras</option>
                        <option value="Wicara" <?php if (isset($abkAyah) && $abkAyah == "Wicara") echo "selected"; ?>>Wicara</option>
                        <option value="Tuna ganda" <?php if (isset($abkAyah) && $abkAyah == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                        <option value="Hiperaktif" <?php if (isset($abkAyah) && $abkAyah == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                        <option value="Cerdas Istimewa" <?php if (isset($abkAyah) && $abkAyah == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                        <option value="Bakat Istimewa" <?php if (isset($abkAyah) && $abkAyah == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                        <option value="Kesulitan Belajar" <?php if (isset($abkAyah) && $abkAyah == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                        <option value="Narkoba" <?php if (isset($abkAyah) && $abkAyah == "Narkoba") echo "selected"; ?>>Narkoba</option>
                        <option value="Indigo" <?php if (isset($abkAyah) && $abkAyah == "Indigo") echo "selected"; ?>>Indigo</option>
                        <option value="Down Sindrome" <?php if (isset($abkAyah) && $abkAyah == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                        <option value="Autis" <?php if (isset($abkAyah) && $abkAyah == "Autis") echo "selected"; ?>>Autis</option>
                    </select>
                    <span class="warning"><?php echo $error_abkAyah; ?></span>
                </div>

            </div><br>
        </div>


        <h4 class="alert alert-primary  mt-3">Data Ibu Kandung</h4>
        <div id="ibu">

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="namaIbu" class="col-form-label"> Nama Ibu Kandung </label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="namaIbu" id="namaIbu" class="form-control <?php echo ($error_namaAyah != "" ? "is-invalid" : ""); ?>" maxlength="40" value="<?php echo $namaIbu; ?>" placeholder="Masukan Nama Ibu Anda">
                    <span class="warning"><?php echo $error_namaibu; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="tgllahirIbu" class="col-form-label"> Tahun Lahir </label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="tgllahirIbu" id="tgllahirIbu" class="form-control <?php echo ($error_tahunibu != "" ? "is-invalid" : ""); ?>" maxlength="4" value="<?php echo $tgllahirIbu; ?>" placeholder="Masukan Tahun Lahir Ibu Anda">
                    <span class="warning"><?php echo $error_tahunibu; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="rwytpdkIbu" class="col-form-label"> Riwayat Pendidikan </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="pdkIbu">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Sekolah" <?php if (isset($pdkIbu) && $pdkIbu == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                        <option value="Putus Sekolah" <?php if (isset($pdkIbu) && $pdkIbu == "Putus Sekolah") echo "selected"; ?>>Putus Sekolah</option>
                        <option value="SD Sederajat" <?php if (isset($pdkIbu) && $pdkIbu == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                        <option value="SMP Sederajat" <?php if (isset($pdkIbu) && $pdkIbu == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                        <option value="SMA Sederajat" <?php if (isset($pdkIbu) && $pdkIbu == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                        <option value="D1" <?php if (isset($pdkIbu) && $pdkIbu == "D1") echo "selected"; ?>>D1</option>
                        <option value="D2" <?php if (isset($pdkIbu) && $pdkIbu == "D2") echo "selected"; ?>>D2</option>
                        <option value="D3" <?php if (isset($pdkIbu) && $pdkIbu == "D3") echo "selected"; ?>>D3</option>
                        <option value="D4/S1" <?php if (isset($pdkIbu) && $pdkIbu == "D4/S1") echo "selected"; ?>>D4/S1</option>
                        <option value="S2" <?php if (isset($pdkIbu) && $pdkIbu == "S2") echo "selected"; ?>>S2</option>
                        <option value="S3" <?php if (isset($pdkIbu) && $pdkIbu == "S3") echo "selected"; ?>>S3</option>
                    </select>
                    <span class="warning"><?php echo $error_pdkIbu; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="gajiIbu" class="col-form-label"> Pekerjaan ibu </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="pkjIbu">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Bekerja" <?php if (isset($pkjIbu) && $pkjIbu == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                        <option value="Nelayan" <?php if (isset($pkjIbu) && $pkjIbu == "Nelayan") echo "selected"; ?>>Nelayan</option>
                        <option value="Petani" <?php if (isset($pkjIbu) && $pkjIbu == "Petani") echo "selected"; ?>>Petani</option>
                        <option value="Peternak" <?php if (isset($pkjIbu) && $pkjIbu == "Peternak") echo "selected"; ?>>Peternak</option>
                        <option value="PNS/TNI/Porli" <?php if (isset($pkjIbu) && $pkjIbu == "PNS/TNI/Porli") echo "selected"; ?>>PNS/TNI/Porli</option>
                        <option value="Karyawan Swasta" <?php if (isset($pkjIbu) && $pkjIbu == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                        <option value="Pedagang Kecil" <?php if (isset($pkjIbu) && $pkjIbu == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                        <option value="Pedagang Besar" <?php if (isset($pkjIbu) && $pkjIbu == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                        <option value="Wiraswasta" <?php if (isset($pkjIbu) && $pkjIbu == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                        <option value="Wirausaha" <?php if (isset($pkjIbu) && $pkjIbu == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                        <option value="Pensiunan" <?php if (isset($pkjIbu) && $pkjIbu == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                        <option value="Lainnya" <?php if (isset($pkjIbu) && $pkjIbu == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                    <span class="warning"><?php echo $error_pkjIbu; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="penghasilibu" class="col-form-label"> Penghasilan ibu </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="gajiIbu">
                        <option selected disabled value="">Pilih...</option>
                        <option value="kurang dari 500.000" <?php if (isset($gajiIbu) && $gajiIbu == "kurang dari 500.000") echo "selected"; ?>>kurang dari 500.000</option>
                        <option value="500.000 - 999.999" <?php if (isset($gajiIbu) && $gajiIbu == "500.000 - 999.999") echo "selected"; ?>>500.000 - 999.999</option>
                        <option value="1 juta - 1.999.999" <?php if (isset($gajiIbu) && $gajiIbu == "1 juta - 1.999.999") echo "selected"; ?>>1 juta - 1.999.999</option>
                        <option value="2 juta - 4.999.999" <?php if (isset($gajiIbu) && $gajiIbu == "2 juta - 4.999.999") echo "selected"; ?>>2 juta - 4.999.999</option>
                        <option value="5 juta - 20 juta" <?php if (isset($gajiIbu) && $gajiIbu == "5 juta - 20 juta") echo "selected"; ?>>5 juta - 20 juta</option>
                        <option value="Lebih dari 20 juta" <?php if (isset($gajiIbu) && $gajiIbu == "Lebih dari 20 juta") echo "selected"; ?>>Lebih dari 20 juta</option>
                    </select>
                    <span class="warning"><?php echo $error_gajiIbu; ?></span>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="abkIbu" class="col-form-label"> Berkebutuhan Khusus </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="abkIbu">
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak" <?php if (isset($abkIbu) && $abkIbu == "Tidak") echo "selected"; ?>>Tidak</option>
                        <option value="Netra" <?php if (isset($abkIbu) && $abkIbu == "Netra") echo "selected"; ?>>Netra</option>
                        <option value="Rungu" <?php if (isset($abkIbu) && $abkIbu == "Rungu") echo "selected"; ?>>Rungu</option>
                        <option value="Grahita ringan" <?php if (isset($abkIbu) && $abkIbu == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                        <option value="Grahita sedang" <?php if (isset($abkIbu) && $abkIbu == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                        <option value="Daksa ringan" <?php if (isset($abkIbu) && $abkIbu == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                        <option value="Daksa sedang" <?php if (isset($abkIbu) && $abkIbu == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                        <option value="Laras" <?php if (isset($abkIbu) && $abkIbu == "Laras") echo "selected"; ?>>Laras</option>
                        <option value="Wicara" <?php if (isset($abkIbu) && $abkIbu == "Wicara") echo "selected"; ?>>Wicara</option>
                        <option value="Tuna ganda" <?php if (isset($abkIbu) && $abkIbu == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                        <option value="Hiperaktif" <?php if (isset($abkIbu) && $abkIbu == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                        <option value="Cerdas Istimewa" <?php if (isset($abkIbu) && $abkIbu == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                        <option value="Bakat Istimewa" <?php if (isset($abkIbu) && $abkIbu == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                        <option value="Kesulitan Belajar" <?php if (isset($abkIbu) && $abkIbu == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                        <option value="Narkoba" <?php if (isset($abkIbu) && $abkIbu == "Narkoba") echo "selected"; ?>>Narkoba</option>
                        <option value="Indigo" <?php if (isset($abkIbu) && $abkIbu == "Indigo") echo "selected"; ?>>Indigo</option>
                        <option value="Down Sindrome" <?php if (isset($abkIbu) && $abkIbu == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                        <option value="Autis" <?php if (isset($abkIbu) && $abkIbu == "Autis") echo "selected"; ?>>Autis</option>
                    </select>
                    <span class="warning"><?php echo $error_abkIbu; ?></span>
                </div>
            </div><br>
        </div>

        <div class="form-group row ">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        </form>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>