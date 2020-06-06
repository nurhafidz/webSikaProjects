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
                                <form id="example-form" method="POST" action="saveform.php">
                                <div class="container">
                                    <h3>Approval online PT. PLN (Persero)</h3>
                                    <div id="myDIV8"  >
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
                                            <label for="">Tanggal</label>
                                            <input id="mydiv61"  type="date" name="tgl_informasi_pekerjaan2" class="validate datepicker" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Jenis Pekerjaan </label>
                                            <input id="mydiv62"  type="text" name="jenis_pekerjaan2" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Lokasi </label>
                                            <input id="mydiv63"  type="text" name="lokasi_pekerjaan2" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Perusahaan Pelaksana Pekerjaan </label>
                                            <input id="mydiv64"  type="text" name="perusahaan_pelaksana" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Pengawas Pekerjaan </label>
                                            <input id="mydiv65"  type="text" name="pengawas_pekerjaan" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Pelaksana Pekerjaan <br>*misal: 1. nama lengkap pelaksana lalu 2, 3, 4, dst..</label><br>
                                            <input id="mydiv66"  type="text" name="pelaksana_pekerjaan" autocomplete="off"  >
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
                                            <input  type="checkbox" id="mydiv71"  name="ck3[]" value="Helm">
                                            <label for="mydiv71"> Helm</label><br>
                                        </div>
                                        
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv72"  name="ck3[]" value="Sepatu Keselamatan">
                                            <label for="mydiv72"> Sepatu Keselamatan</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv73"  name="ck3[]" value="Kacamata">
                                            <label for="mydiv73"> Kacamata</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv74"  name="ck3[]" value="Earplug">
                                            <label for="mydiv74"> Earplug</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv75"  name="ck3[]" value="Earmuff">
                                            <label for="mydiv75"> Earmuff</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv76"  name="ck3[]" value="Sarung tangan katun">
                                            <label for="mydiv76"> Sarung tangan katun</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv77"  name="ck3[]" value="Sarung tangan karet">
                                            <label for="mydiv77"> Sarung tangan karet</label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv78"  name="ck3[]" value="Sarung tangan 20kV">
                                            <label for="mydiv78"> Sarung tangan 20kV </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv79"  name="ck3[]" value="Pelampung life Vest">
                                            <label for="mydiv79"> Pelampung life Vest </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv710" name="ck3[]" value="Tabung Pernafasan">
                                            <label for="mydiv710"> Tabung Pernafasan </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv711" name="ck3[]" value="Full-Body Harness">
                                            <label for="mydiv711"> Full-Body Harness </label><br>
                                        </div>

                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv712" name="ck3[]" value="Yang lain:">
                                            <label for="mydiv712"> Yang lain: </label><br>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Perlengkapan keselamatan & darurat</p>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv81" name="ck4[]" value="Pemadam Api (APAR dll)">
                                            <label for="mydiv81"> Pemadam Api (APAR dll)</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv82" name="ck4[]" value="Rambu Keselamatan">
                                            <label for="mydiv82"> Rambu Keselamatan</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv83" name="ck4[]" value="LOTO (lock out tag out)">
                                            <label for="mydiv83"> LOTO (lock out tag out)</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv84" name="ck4[]" value="Radio Telekomunikasi">
                                            <label for="mydiv84"> Radio Telekomunikasi</label><br>
                                        </div>
                                        <div class="input-field ">
                                            <input  type="checkbox" id="mydiv85" name="ck4[]" value="Yang lain:">
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
                                            <label for="mydiv92"> Uraikan Langkah Pekerjaan</label>
                                            <input  type="text" name="langkah_pekerjaan"  id="mydiv92">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv93"> Uraikan Potensi Bahaya dan Resiko</label>
                                            <input  type="text" name="potensi_bahaya_dan_resiko"  id="mydiv93">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv94"> Uraikan Tindakan Pengendalian</label>
                                            <input  type="text" required name="tindakan_pengendalian"  id="mydiv94">
                                        </div>
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform10()">back</button>
                                        <input  type="submit" required id="save" name="save2" class="waves-effect waves-light btn orange dark-1">
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

    </body>
</html>
<?php } ?> 