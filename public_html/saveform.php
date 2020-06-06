<?php
error_reporting(E_ALL && E_NOTICE);
session_start();
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
    $eid=$_SESSION['emplogin'];
}
//form 1
//f0
$eid=$_SESSION['emplogin'];
    $sql = "SELECT * from  tblemployees where EmailId=:eid";
    $query = $dbh -> prepare($sql);
    $query -> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            
        

if (isset($_POST['save'])) {
    $id=$result->id;
    $email=$_POST['email'];
    //f1
    $tanggal_pengajuan=$_POST['tanggal_pengajuan'];
    $jenis_pekerjaan=$_POST['jenis_pekerjaan'];
    $detail_pekerjaan=$_POST['detail_pekerjaan'];
    $lokasi_pekerjaan=$_POST['lokasi_pekerjaan'];
    $Pengawas_Pekerjaan=$_POST['Pengawas_Pekerjaan'];
    $telp1=$_POST['telp1'];
    $Pengawas_K3=$_POST['Pengawas_K3'];
    $telp2=$_POST['telp2'];
    //f2
    $Tanggal_Mulai=$_POST['Tanggal_Mulai'];
    $Tanggal_selesai=$_POST['Tanggal_selesai'];
    $Jam_Mulai=$_POST['Jam_Mulai'];
    $Jam_selesai=$_POST['Jam_selesai'];
    //f3

    $ck1all = implode(",", $_POST['ck1']);
    //f4
    $ck2all=implode(",", $_POST['ck2']);
    //f5
    $img_resiko=$_FILES['img_resiko']['name'];
    $img_analysis=$_FILES['img_analysis']['name'];
    $img_prosedur_kerja=$_FILES['img_prosedur_kerja']['name'];
    $img_pekerja=$_FILES['img_pekerja']['name'];

    //form 2
    //f6
    $tgl_informasi_pekerjaan2=$_POST['tgl_informasi_pekerjaan2'];
    $jenis_pekerjaan2=$_POST['jenis_pekerjaan2'];
    $lokasi_pekerjaan2=$_POST['lokasi_pekerjaan2'];
    $perusahaan_pelaksana=$_POST['perusahaan_pelaksana'];
    $pengawas_pekerjaan=$_POST['pengawas_pekerjaan'];
    $pelaksana_pekerjaan=$_POST['pelaksana_pekerjaan'];
    //f7
    $ck3=implode(",", $_POST['ck3']);
    $ck4=implode(",", $_POST['ck4']);
    //f9
    $langkah_pekerjaan=$_POST['langkah_pekerjaan'];
    $potensi_bahaya_dan_resiko=$_POST['potensi_bahaya_dan_resiko'];
    $tindakan_pengendalian=$_POST['tindakan_pengendalian'];

    $loc_img_resiko="images/imgresiko/";
    $loc_img_analysis="images/imganalysis/";
    $loc_img_prosedur_kerja="images/imgprosedurkerja/";
    $loc_img_pekerja="images/imgpekerja/";

    $target_file1 = $loc_img_resiko . basename($_FILES["img_resiko"]["name"]);
    $target_file2 = $loc_img_analysis . basename($_FILES['img_analysis']['name']);
    $target_file3 = $loc_img_prosedur_kerja . basename($_FILES['img_prosedur_kerja']['name']);
    $target_file4 = $loc_img_pekerja . basename($_FILES['img_pekerja']['name']);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png");

    if (in_array($imageFileType, $extensions_arr)) {
        $sql = "INSERT INTO tbljobinformation (EmployeesID,
        DateOfFiling,
        Email,
        TypeOfWork,
        JobDetails,
        JobLocation,
        NameJobSupervisor,
        PhoneNumberJobSupervisor,
        NameOhsSupervisor,
        PhoneNumberOhsSupervisor,
        StartDate,
        EndDate,
        StartTime,
        EndTime,
        JobClassification,
        JobProcedure,
        HazardIdentificationImage,
        JobSafetyImage,
        WorkProceduresImage,
        CertificateOfCompetenceImage
        ) 
            VALUES (:EmployeesID,
        :DateOfFilin,
        :Email,
        :TypeOfWork,
        :JobDetails,
        :lokasi_pekerjaan,
        :Pengawas_Pekerjaan,
        :telp1,
        :Pengawas_K3,
        :telp2,
        :Tanggal_Mulai,
        :Tanggal_selesai,
        :Jam_Mulai,
        :Jam_selesai,
        :ck1all,
        :ck2all,
        :HazardIdentificationImage,
        :JobSafetyImage,
        :WorkProceduresImage,
        :CertificateOfCompetenceImage
        )";
        $stmt = $dbh->prepare($sql);
        $params = array(
        ':EmployeesID' => $id,
        ':DateOfFilin' => $tanggal_pengajuan,
        ':Email' => $email,
        ':TypeOfWork' => $jenis_pekerjaan,
        ':JobDetails' => $detail_pekerjaan,
        ':lokasi_pekerjaan' => $lokasi_pekerjaan,
        ':Pengawas_Pekerjaan' => $Pengawas_Pekerjaan,
        ':telp1' => $telp1,
        ':Pengawas_K3' => $Pengawas_K3,
        ':telp2' => $telp2,
        ':Tanggal_Mulai' => $Tanggal_Mulai,
        ':Tanggal_selesai' => $Tanggal_selesai,
        ':Jam_Mulai' => $Jam_Mulai,
        ':Jam_selesai' => $Jam_selesai,
        ':ck1all' => $ck1all,
        ':ck2all' => $ck2all,
        ':HazardIdentificationImage'=> $img_resiko,
        ':JobSafetyImage'=> $img_analysis,
        ':WorkProceduresImage'=> $img_prosedur_kerja,
        ':CertificateOfCompetenceImage'=> $img_pekerja,
    );

        move_uploaded_file($_FILES['img_resiko']['tmp_name'], $loc_img_resiko.$img_resiko);
        move_uploaded_file($_FILES['img_analysis']['tmp_name'], $loc_img_analysis.$img_analysis);
        move_uploaded_file($_FILES['img_prosedur_kerja']['tmp_name'], $loc_img_prosedur_kerja.$img_prosedur_kerja);
        move_uploaded_file($_FILES['img_pekerja']['tmp_name'], $loc_img_pekerja.$img_pekerja);

        $saved = $stmt->execute($params);
        if ($saved) {
            echo 'berhasil 1';
        }
        $sql2 = "INSERT INTO tblworksafetyanalysis (EmployeesID,
        Email,
        Date,
        TypeOfWork,
        Location,
        JobImplementingCompany,
        JobSupervisor,
        JobExecutors,
        PersonalProtectiveEquipment,
        SafetyEmergencyEquipment,
        JobSteps,
        PotentialDangersAndRisks,
        ControlMeasures) 
        VALUES (
        :EmployeesID,
        :Email,
        :Date,
        :TypeOfWork,
        :Location,
        :JobImplementingCompany,
        :JobSupervisor,
        :JobExecutors,
        :PersonalProtectiveEquipment,
        :SafetyEmergencyEquipment,
        :JobSteps,
        :PotentialDangersAndRisks,
        :ControlMeasures
            )";
        $stmt2 = $dbh->prepare($sql2);
        $params2 = array(
        ':EmployeesID'=>$id,
        ':Email' => $email,
        ':Date'=>$tgl_informasi_pekerjaan2,
        ':TypeOfWork'=>$jenis_pekerjaan2,
        ':Location'=>$lokasi_pekerjaan2,
        ':JobImplementingCompany'=>$perusahaan_pelaksana,
        ':JobSupervisor'=>$pengawas_pekerjaan,
        ':JobExecutors'=>$pelaksana_pekerjaan,
        ':PersonalProtectiveEquipment'=>$ck3,
        ':SafetyEmergencyEquipment'=>$ck4,
        ':JobSteps'=>$langkah_pekerjaan,
        ':PotentialDangersAndRisks'=>$potensi_bahaya_dan_resiko,
        ':ControlMeasures'=>$tindakan_pengendalian,
        );
        $saved2 = $stmt2->execute($params2);
        if ($saved2) {
            echo 'berhasil';
        }
        }
    }
    }
    if (isset($_POST['save3'])) {
        
        
        $id=$result->id;
        $email='abc';
        $nama_unit=$_POST['nama_unit'];
        $bidang=$_POST['bidang'];
        $jenis_pekerjaan=$_POST['jenis_pekerjaan'];
        $no_dokumen=$_POST['no_dokumen'];
        $tgl3=$_POST['tgl3'];
        $revisi=$_POST['revisi'];
        $halaman=$_POST['halaman'];
        $kegiatan=$_POST['kegiatan'];
        $potensi_bahaya=$_POST['potensi_bahaya'];
        $resiko=$_POST['resiko'];
        $konsekuensi=$_POST['konsekuensi'];
        $tingkat_resiko=$_POST['tingkat_resiko'];
        $status_pengendalian=$_POST['status_pengendalian'];
        $penanggung_jawab=$_POST['penanggung_jawab'];
        
    echo "<br>";echo $nama_unit;
    echo "<br>";echo $bidang;
    echo "<br>";echo $jenis_pekerjaan;
    echo "<br>";echo $no_dokumen;
    echo "<br>";echo $tgl3;
    echo "<br>";echo $revisi;
    echo "<br>";echo $halaman;
    echo "<br>";echo $kegiatan;
    echo "<br>";echo $potensi_bahaya;
    echo "<br>";echo $resiko;
    echo "<br>";echo $konsekuensi;
    echo "<br>";echo $tingkat_resiko;
    echo "<br>";echo $status_pengendalian;
    echo "<br>";echo $penanggung_jawab;
    
        $sql3= $dbh->prepare(" INSERT INTO tblidentification (
            EmployeesID,Email,UnitName,Field,TypeOfWork,DocumentNumber,Date,Revision,Page,Activity,PotentialHazard,onsequence,Possibility,LevelOfRisk,ControlStatus,PersonInCharge	
            ) 
            VALUES(:EmployeesID,:email,:nama_unit,:bidang,:jenis_pekerjaan,:no_dokumen,:tgl3,:revisi,:halaman,:kegiatan,:potensi_bahaya,:resiko,:konsekuensi,:tingkat_resiko,:status_pengendalian,:penanggung_jawab)");
            
            $params3 = array(
                ':EmployeesID'=>$id,
                ':email'=>$email,
                ':nama_unit'=>$nama_unit,
                ':bidang'=>$bidang,
                ':jenis_pekerjaan'=>$jenis_pekerjaan,
                ':no_dokumen'=>$no_dokumen,
                ':tgl3'=>$tgl3,
                ':revisi'=>$revisi,
                ':halaman'=>$halaman,
                ':kegiatan'=>$kegiatan,
                ':potensi_bahaya'=>$potensi_bahaya,
                ':resiko'=>$resiko,
                ':konsekuensi'=>$konsekuensi,
                ':tingkat_resiko'=>$tingkat_resiko,
                ':status_pengendalian'=>$status_pengendalian,
                ':penanggung_jawab'=>$penanggung_jawab,
            );
            $saved3 = $sql3->execute($params3);
            if ($saved3) {
                echo 'berhasil';
            }
            
    }
}



    // //f10



?>
