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

</style>
<script>

</script>
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
                                    <div id="myDIV12">
                                        <h5>3. Identifikasi Bahaya, Penilaian dan Pengendalian resiko</h5>
                                        <br>
                                        <p>HAZARD IDENTIFICATION, RISK ASSESSMENT AND RISK CONTROL (HIRARC)</p>
                                        
                                        <br>
                                        
                                        <div class="input-field ">
                                            <label for="mydiv101"> Nama Unit</label>
                                            <input required type="text" name="nama_unit"  class="custom-file-input"  id="mydiv101">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv102"> Bidang</label>
                                            <input required type="text" name="bidang" class="custom-file-input"  id="mydiv102">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv103"> Jenis Pekerjaan</label>
                                            <input required type="text" name="jenis_pekerjaan" class="custom-file-input"  id="mydiv103">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv104"> No. Dokumen</label>
                                            <input required type="text" name="no_dokumen" class="custom-file-input"  id="mydiv104">
                                        </div>
                                        <div class="input-field ">
                                            <p> Tanggal</p>
                                            <input required  type="date" name="tgl3" class="validate datepicker" autocomplete="off"   >
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv106"> Revisi</label>
                                            <input required type="text" name="revisi" class="custom-file-input"  id="mydiv106">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv107"> Halaman</label>
                                            <input required type="text" name="halaman" class="custom-file-input"  id="mydiv107">
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
                                            <input required type="text" name="kegiatan" class="custom-file-input"  id="mydiv108">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv109"> Potensi Bahaya</label>
                                            <input required type="text" name="potensi_bahaya" class="custom-file-input"  id="mydiv109">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1010"> Resiko</label>
                                            <input required type="text" name="resiko" class="custom-file-input"  id="mydiv1010">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1011"> Konsekuensi</label>
                                            <input required type="text" name="konsekuensi" class="custom-file-input"  id="mydiv1011">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1012"> Kemungkinan</label>
                                            <input required type="text" name="kemungkinan" class="custom-file-input"  id="mydiv1012">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1013"> Tingkat Resiko</label>
                                            <input required type="text" name="tingkat_resiko" class="custom-file-input"  id="mydiv1013">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1014"> Status Pengendalian</label>
                                            <input required type="text" name="status_pengendalian" class="custom-file-input"  id="mydiv1014">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv1015"> Penanggung Jawab</label>
                                            <input required type="text"  name="penanggung_jawab" class="custom-file-input"  id="mydiv1015" >
                                        </div>  
                                        <br>
                                        <button class="waves-effect waves-light btn orange dark-1" onclick="myform11()">back</button>
                                        <right>
                                        <input  type="submit" required id="save" name="save3" class="waves-effect waves-light btn orange dark-1">
                                        </right>
                                        
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