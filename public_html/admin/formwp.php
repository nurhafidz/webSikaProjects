<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
// code for Inactive  employee    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update tblemployees set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:manageemployee.php');
}



//code for active employee
if(isset($_GET['ida']))
{
$id=$_GET['ida'];
$status=1;
$sql1 = "update tbljobinformation set Status=:status  WHERE id=:id";
$sql2 = "update tblworksafetyanalysis set Status=:status  WHERE id=:id";
$sql3 = "update tblidentification set Status=:status  WHERE id=:id";
$query1 = $dbh->prepare($sql1);
$query2 = $dbh->prepare($sql2);
$query3 = $dbh->prepare($sql3);
$query1 -> bindParam(':id',$id, PDO::PARAM_STR);
$query1 -> bindParam(':status',$status, PDO::PARAM_STR);
$query1 -> execute();
$query2 -> bindParam(':id',$id, PDO::PARAM_STR);
$query2 -> bindParam(':status',$status, PDO::PARAM_STR);
$query2 -> execute();
$query3 -> bindParam(':id',$id, PDO::PARAM_STR);
$query3 -> bindParam(':status',$status, PDO::PARAM_STR);
$query3 -> execute();
header('location:formwp.php');
}
if(isset($_GET['idb']))
{
$id=$_GET['idb'];
$status=2;
$sql1 = "update tbljobinformation set Status=:status  WHERE id=:id";
$sql2 = "update tblworksafetyanalysis set Status=:status  WHERE id=:id";
$sql3 = "update tblidentification set Status=:status  WHERE id=:id";
$query1 = $dbh->prepare($sql1);
$query2 = $dbh->prepare($sql2);
$query3 = $dbh->prepare($sql3);
$query1 -> bindParam(':id',$id, PDO::PARAM_STR);
$query1 -> bindParam(':status',$status, PDO::PARAM_STR);
$query1 -> execute();
$query2 -> bindParam(':id',$id, PDO::PARAM_STR);
$query2 -> bindParam(':status',$status, PDO::PARAM_STR);
$query2 -> execute();
$query3 -> bindParam(':id',$id, PDO::PARAM_STR);
$query3 -> bindParam(':status',$status, PDO::PARAM_STR);
$query3 -> execute();
header('location:formwp.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Manage Employees</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="../assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
<style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body>
       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Manage EmployesWWW</div>
                    </div>
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Employees Info</span>
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                <table id="example" class="display responsive-table ">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
<?php $sql = "SELECT Email, Date,id,Status from  tbljobinformation";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->Email);?></td>
                                            <td><?php echo htmlentities($result->Date);?>
                                             <td><?php $stats=$result->Status;
                                            if($stats==1){
                                             ?>
                                                 <a class="waves-effect waves-green btn-flat m-b-xs">Active</a>
                                                 <?php } 
                                                 else if($stats==2) { ?>
                                                 <a class="waves-effect waves-red btn-flat m-b-xs">Reject</a>
                                                 <?php } 
                                                 else { ?>
                                                 <a class="waves-effect waves-orange btn-flat m-b-xs">waiting</a>
                                                 <?php } ?>


                                             </td>
                                            <td><a href="showformwp.php?frid=<?php echo htmlentities($result->id);?>"><i class="material-icons">mode_edit</i></a>
                                        
                                        <a type="submit" name="accept" href="formwp.php?ida=<?php echo htmlentities($result->id);?>" > <i class="material-icons" title="Accept">done</i></a>
                                        
                                    
                                        <a type="submit" name="Reject" href="formwp.php?idb=<?php echo htmlentities($result->id);?>" ><i class="material-icons" title="Reject">clear</i></a>
                                     </td>
                                        </tr>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
        
    </body>
</html>
<?php } ?>