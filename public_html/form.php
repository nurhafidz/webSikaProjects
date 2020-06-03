<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Update Employee</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<style>
#inputText {
      margin-left: 20px;
}
#inputCheckbox {
    position: absolute;
    top: 0px;
    margin-top: 0px;
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}



</style>

    </head>
    <body>
  <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Formulir WP Aproval</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" >
                                <div class="container">
                                    <h3>Approval online PT. PLN (Persero)</h3>
                                    <div id="myDIV">
                                    <p>Mengisi formulir secara online, silahkan masukkan email anda dibawah ini. Email tersebut akan menjadi alat komunikasi bagi kami untuk memberikan anda kabar mengenai persetujuan atau penolakan atas pengisian form izin kerja anda.</p>

                                    <br>
                                    <div class="input-field">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" name="email" class="validate" autocomplete="off" required >
                                    </div>
                                    <button class="waves-effect waves-light btn orange dark-1" onclick="myform()">next</button>
                                    </div>

                                    <div id="myDIV2" style="display: none;" >
                                    <h5>1. Working Permit</h5>
                                    <br>
                                    <p>Harap siapkan 4 dokumen : Prosedur bekerja, Job safety analysis, Sertifikat Kompetensi Bekerja, dan Identifikasi Bahaya, Penilaian dan Pengendalian Resiko untuk di-upload ke bagian akhir di form berikut ini (klik Berikutnya)</p>
                                    <br>
                                    <button class="waves-effect waves-light btn orange dark-1" onclick="myform()">back</button>
                                    <button class="waves-effect waves-light btn orange dark-1" onclick="myform2()">next</button>
                                    </div>

                                    <div id="myDIV3" style="display: none;" >
                                        <h5>A. Informasi Pekerjaan</h5>
                                        <br>
                                        <div class="input-field">
                                            <label for="">Tanggal Pengajuan </label>
                                            <input id="mydiv11"  type="date" name="" class="validate datepicker" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Jenis Pekerjaan </label>
                                            <input id="mydiv12"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Detail Pekerjaan </label>
                                            <input id="mydiv13"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Lokasi Pekerjaan </label>
                                            <input id="mydiv14"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <p for="">Pengawas Pekerjaan</p>
                                        <div class="input-field col s6">
                                            <label for="">Nama Lengkap</label>
                                            <input id="mydiv15"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <div class="input-field col s6">
                                            <label for="">Nomor Telepon</label>
                                            <input id="mydiv16"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <p for="">Pengawas Pekerjaan</p>
                                        <div class="input-field col s6">
                                            <label for="">Nama Lengkap</label>
                                            <input id="mydiv17"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <div class="input-field col s6">
                                            <label for="">Nomor Telepon</label>
                                            <input id="mydiv18"  type="text" name="" class="validate " autocomplete="off" required  >
                                        </div>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform2()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform3()">next</button>
                                    </div>

                                    <div id="myDIV4" style="display: none;" >
                                        <h5>B. Durasi Pekerjaan</h5>
                                        <br>
                                        <div class="input-field col s5">
                                            <p for="">Tanggal Mulai </p>
                                            <input id="mydiv21"  type="date" name="" class="validate datepicker" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field col s2 " >
                                        <p style="text-align: center">-</p>
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Tanggal selesai </p>
                                            <input id="mydiv22"  type="date" name="" class="validate datepicker" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Jam Mulai </p>
                                            <input id="mydiv23"  type="time" name="" class="validate" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field col s2 " >
                                        <p style="text-align: center">-</p>
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Jam selesai </p>
                                            <input id="mydiv24"  type="time" name="" class="validate" autocomplete="off" required  >
                                        </div>
                                        
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform3()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform4()">next</button>
                                    </div>

                                    <div id="myDIV5" style="display: none;" >
                                        <h5>C. Klasifikasi Pekerjaan</h5>
                                        <br>
                                        <p>Pilih klasifikasi</p>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv31"  value="Bike">
                                            <label for="mydiv31"> Pekerjaan Bertegangan Listrik</label><br>
                                        </div>
                                        
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv32"  value="Bike">
                                            <label for="mydiv32"> Pekerjaan Confined Space</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv33"  value="Bike">
                                            <label for="mydiv33"> Pekerjaan Panas</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv34"  value="Bike">
                                            <label for="mydiv34"> Pekerjaan di ketinggian</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv35"  value="Bike">
                                            <label for="mydiv35"> Pekerjaan Penggalian</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv36"  value="Bike">
                                            <label for="mydiv36"> Pekerjaan Penanaman Tiang</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv37"  value="Bike">
                                            <label for="mydiv37"> Pekerjaan Perampalan Pohon (ROW)</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv38"  value="Bike">
                                            <label for="mydiv38"> Pekerjaan Sipil </label><br>
                                        </div>

                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform4()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform5()">next</button>
                                    </div>

                                    <div id="myDIV6" style="display: none;" >
                                        <h5>D. Prosedur Pekerjaan yang telah dijelaskan kepada pekerja</h5>
                                        <br>
                                        <p>Pilih Prosedur</p>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv41"  value="Bike">
                                            <label for="mydiv41"> Pemeliharaan Fuse Cut Out</label><br>
                                        </div>
                                        
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv42"  value="Bike">
                                            <label for="mydiv42"> Bongkar Pasang Trafo Portal</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv43"  value="Bike">
                                            <label for="mydiv43"> Pemeliharaan SUTM (Perabasan)</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv44"  value="Bike">
                                            <label for="mydiv44"> Pemeliharaan SUTM (Perbaikan Kawat terburai/rantas)</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv45"  value="Bike">
                                            <label for="mydiv45"> Pemeliharaan Arrester pada gardu</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv46"  value="Bike">
                                            <label for="mydiv46"> Pemeliharaan Isolator</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv47"  value="Bike">
                                            <label for="mydiv47"> Pemeliharaan LBS dan RECLOSER</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv48"  value="Bike">
                                            <label for="mydiv48"> Bongkar dan Pasang Tiang Beton </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv49"  value="Bike">
                                            <label for="mydiv49"> Pemeliharaan Cubikie Gardu Bangunan </label><br>
                                        </div>

                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform5()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform6()">next</button>
                                    </div>

                                    <div id="myDIV7" style="display: none;" >
                                        <h5>E. Lampiran Izin Kerja</h5>
                                        <br>
                                        <div class="input-field ">
                                            <p for="mydiv51"> Identifikasi Bahaya, Penilaian dan Pengendalian Resiko </p><br>
                                            <input id="mydiv51" type="file" class="custom-file-input waves-effect waves-light btn orange dark-1" require id="mydiv51">
                                        </div>
                                        
                                        <div class="input-field ">
                                            <p for="mydiv52"> Job Safety Analysis</p><br>
                                            <input id="mydiv52" type="file"  class="custom-file-input waves-effect waves-light btn orange dark-1" require id="mydiv52">
                                        </div>

                                        <div class="input-field ">
                                            <p for="mydiv53"> Prosedur Kerja</p><br>
                                            <input id="mydiv53" type="file"  class="custom-file-input waves-effect waves-light btn orange dark-1" require id="mydiv53">
                                        </div>

                                        <div class="input-field ">
                                            <p for="mydiv54"> Sertifikat Kompetensi Pekerja</p><br>
                                            <input id="mydiv54" type="file"  class="custom-file-input waves-effect waves-light btn orange dark-1" require id="mydiv54">
                                        </div>
                                        
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform6()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform7()">next</button>
                                    </div>

                                    <div id="myDIV8" style="display: none;" >
                                        <h5>2. Job Safety Analysis</h5>
                                        <br>
                                        <p>Harap siapkan 4 dokumen : Prosedur bekerja, Job safety analysis, Sertifikat Kompetensi Bekerja, dan Identifikasi Bahaya, Penilaian dan Pengendalian Resiko untuk di-upload ke bagian akhir di form berikut ini (klik Berikutnya)</p>
                                        
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform7()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform8()">next</button>
                                    </div>

                                    <div id="myDIV9" style="display: none;" >
                                        <h5>A. INFORMASI PEKERJAAN</h5>
                                        <br>
                                        <div class="input-field">
                                            <label for="">Tanggal </label>
                                            <input id="mydiv61"  type="date" name="" class="validate datepicker" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Jenis Pekerjaan </label>
                                            <input id="mydiv62"  type="text" name="" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Lokasi </label>
                                            <input id="mydiv63"  type="text" name="" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Perusahaan Pelaksana Pekerjaan </label>
                                            <input id="mydiv64"  type="text" name="" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Pengawas Pekerjaan </label>
                                            <input id="mydiv65"  type="text" name="" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Pelaksana Pekerjaan <br>*misal: 1. nama lengkap pelaksana lalu 2, 3, 4, dst..</label><br>
                                            <input id="mydiv66"  type="text" name="" autocomplete="off" required  >
                                        </div>
                                        
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform8()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform9()">next</button>
                                    </div>

                                    <div id="myDIV10" style="display: none;" >
                                        <h5>B. Peralatan Keselamatan</h5>
                                        <br>
                                        <p>Alat Pelindung diri</p>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv71"  value="Helm">
                                            <label for="mydiv71"> Helm</label><br>
                                        </div>
                                        
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv72"  value="Sepatu Keselamatan">
                                            <label for="mydiv72"> Sepatu Keselamatan</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv73"  value="Kacamata">
                                            <label for="mydiv73"> Kacamata</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv74"  value="Earplug">
                                            <label for="mydiv74"> Earplug</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv75"  value="Earmuff">
                                            <label for="mydiv75"> Earmuff</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv76"  value="Sarung tangan katun">
                                            <label for="mydiv76"> Sarung tangan katun</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv77"  value="Sarung tangan karet">
                                            <label for="mydiv77"> Sarung tangan karet</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv78"  value="Sarung tangan 20kV">
                                            <label for="mydiv78"> Sarung tangan 20kV </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv79"  value="Pelampung/ life Vest">
                                            <label for="mydiv79"> Pelampung/ life Vest </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv710"  value="Pelampung/ life Vest">
                                            <label for="mydiv710"> Tabung Pernafasan </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv711"  value="Pelampung/ life Vest">
                                            <label for="mydiv711"> Full-Body Harness </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv712"  value="Pelampung/ life Vest">
                                            <label for="mydiv712"> Yang lain: </label><br>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Perlengkapan keselamatan & darurat</p>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv81"  value="Pemadam Api (APAR dll)">
                                            <label for="mydiv81"> Pemadam Api (APAR dll)</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv82"  value="Rambu Keselamatan">
                                            <label for="mydiv82"> Rambu Keselamatan</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv83"  value="LOTO (lock out tag out)">
                                            <label for="mydiv83"> LOTO (lock out tag out)</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv84"  value="Radio Telekomunikasi">
                                            <label for="mydiv84"> Radio Telekomunikasi</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv85"  value="Yang lain:">
                                            <label for="mydiv85"> Yang lain:</label><br>
                                        </div>
                                        
                                        <br>
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform9()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform10()">next</button>
                                    </div>

                                    <div id="myDIV11" style="display: none;" >
                                        <h5>C. Analisis Keselamatan Kerja</h5>
                                        <br>
                                        <p>Misalnya, disetiap uraian harus sesuai dengan format berikut:
                                        1. Pembuatan kolom ring balk, tangga, firewall
                                        2. dst..

                                        dengan catatan, disusun dengan urutan yang baik dan benar. karena masing-masing uraian berkaitan per-barisnya (no. 1 uraian langkah pekerjan sebaris dengan no. 1 di uraian potensi bahaya dan sebaris pula di no. 1 uraian tindakan pengendalian) contoh dasar penulisan (manual) bisa diperhatikan seperti berikut</p>
                                        
                                        <br>
                                        <p>Dasar Penulisan</p>
                                        <img src="assets/images/Capture73983279.jpg" alt="">
                                        <br>
                                        <div class="input-field ">
                                            <p for="mydiv91"> Sertifikat Kompetensi Pekerja</p><br>
                                            <input  type="file"  class="custom-file-input waves-effect waves-light btn orange dark-1" require id="mydiv91">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv92"> Uraikan Langkah Pekerjaan</label>
                                            <input  type="text" require id="mydiv92">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv93"> Uraikan Potensi Bahaya dan Resiko</label>
                                            <input  type="text" require id="mydiv93">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv94"> Uraikan Potensi Bahaya dan Resiko</label>
                                            <input  type="text" require id="mydiv94">
                                        </div>
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform10()">back</button>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform11()">next</button>
                                    </div>
                                    <div id="myDIV12" style="display: none;" >
                                        <h5>3. Identifikasi Bahaya, Penilaian dan Pengendalian resiko</h5>
                                        <br>
                                        <p>HAZARD IDENTIFICATION, RISK ASSESSMENT AND RISK CONTROL (HIRARC)</p>
                                        
                                        <br>
                                        
                                        <div class="input-field ">
                                            <label for="mydiv101"> Nama Unit</label>
                                            <input  type="text"   class="custom-file-input" require id="mydiv101">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv102"> Bidang</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv102">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv103"> Jenis Pekerjaan</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv103">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv104"> No. Dokumen</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv104">
                                        </div>
                                        <div class="input-field ">
                                            <p > Tanggal</p>
                                            <input   type="date" name="" class="validate datepicker" autocomplete="off" required  >
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv106"> Revisi</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv106">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv107"> Halaman</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv107">
                                        </div>
                                        <p>Dasar Penulisan</p>
                                        <img src="assets/images/Capture29920.jpg" alt="">
                                        <br>

                                        <p>Perhatian! Isi uraian dengan prosedur terurut yang baik dan benar
                                        karena masing-masing baris, berkaitan dengan sub-pertanyaan lainnya sesuai dengan form excel manual seperti gambar dibawah ini | contoh format penulisan:
                                        Kegiatan</p>
                                        <p>1. ----------</p>
                                        <p>2. ----------</p>
                                        <p>3. ----------</p>
                                        <p>4. dan seterusnya</p>

                                        <div class="input-field ">
                                            <label for="mydiv108"> Kegiatan</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv108">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv109"> Potensi Bahaya</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv109">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1010"> Resiko</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1010">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1011"> Konsekuensi</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1011">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1012"> Kemungkinan</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1012">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1013"> Tingkat Resiko</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1013">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1014"> Status Pengendalian</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1014">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1015"> Penanggung Jawab</label>
                                            <input  type="text"  class="custom-file-input" require id="mydiv1015">
                                        </div>  
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform11()">back</button>
                                        <input  type="submit" name="signup" value="Sign up" class="waves-effect waves-light btn orange dark-1">
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/pages/form_elements.js"></script>
        <script>
        
        </script>
    </body>
</html>
<?php } ?> 