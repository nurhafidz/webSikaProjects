<?php
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WP Approval </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="orange darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">
                            <span class="chapter-title">WP</span>
                        </div>


                        </form>


                    </div>
                </nav>
            </header>


            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">


                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion" style="">
                    <li>&nbsp;</li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="index.php"><i class="material-icons">account_box</i>Employe Login</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="forgot-password.php"><i class="material-icons">account_box</i>Lupa Password?</a></li>

                       <li class="no-padding"><a class="waves-effect waves-grey" href="admin/"><i class="material-icons">account_box</i>Admin Login</a></li>

                </ul>
          <div class="footer" style="color:orange">
                    <p class="copyright" style="color:orange"><a href="https://nisacodelifings.netlify.com/">nisacodelifings</a>©</p>

                </div>
                </div>
            </aside>
            <main class="mn-inner">
                <div class="row">
                <div class="col s12">
                        <div class="page-title"><h4 style="text-align:center">SikaProjects</h4></div>
                    </div>
                    <div class="col s12">
                          <div class=" s12 m6 l8 offset-l2 offset-m3">
                              <div class="card white darken-1">

                                  <div class="card-content ">
                                      <span class="card-title" style="font-size:20px;">Employee Sign Up</span>
                                       <div class="row">
                                           <form class="col s12" name="signup" onSubmit="return validate();" method="post">
                                               <div class="input-field col s6">
                                                   <input id="firstname" type="text" name="firstname" class="validate" autocomplete="off" required >
                                                   <label for="firstname">First Name</label>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="lastname" type="text" name="lastname" class="validate" autocomplete="off" required >
                                                   <label for="lastname">Last Name</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email" type="text" name="email" class="validate" autocomplete="off" required >
                                                   <label for="email">Email</label>
                                               </div>
                                               <div class="input-field col s6">
                                                   <select id="gender" type="text" name="gender" class="validate" autocomplete="off" required >
                                                   <option >Gender</option>
                                                   <option value="Male">Male</option>
                                                   <option value="Female">Female</option>
                                                   <option value="Other">Other</option>
                                                   </select>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="telp" type="number" name="telp" class="validate" autocomplete="off" required >
                                                   <label for="telp">Telephone number</label>
                                               </div>
                                               <div class="input-field col s6">
                                                    <p>date of birth</p>
                                                   <input id="dob" type="date" name="dob" class="validate datepicker" autocomplete="off" required placeholder="date of birth">
                                                   <label for="dob"></label>
                                               </div>
                                               <div class="input-field col s12">
                                               </div>
                                               <div class="input-field col s6">
                                               <select  name="department" autocomplete="off" required>
                                                    <option value="">Department</option>
                                                    <?php $sql = "SELECT DepartmentName from tbldepartments";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0)
                                                    {
                                                    foreach($results as $resultt)
                                                    {   ?>                                            
                                                    <option value="<?php echo htmlentities($resultt->DepartmentName);?>"><?php echo htmlentities($resultt->DepartmentName);?></option>
                                                    <?php }} ?>
                                                </select>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="Address" type="text" name="Address" class="validate" autocomplete="off" required >
                                                   <label for="address">Address</label>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="city" type="text" name="city" class="validate" autocomplete="off" required >
                                                   <label for="city">City/Town</label>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="Country" type="text" name="Country" class="validate" autocomplete="off" required >
                                                   <label for="Country">Country</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="makepassword" type="password" class="validate" name="makepassword" autocomplete="off" required>
                                                   <label for="password">Password</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input type="password" id="confirm_password" name="confirm_password" autocomplete="off" class="validate" required>
                                                   <label for="password">confirm password</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">

                                                   <input type="submit" name="signup" value="Sign up" class="waves-effect waves-light btn orange dark-1">
                                               </div>
                                           </form>
                                      </div>
                                  </div>
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
    <script src="assets/js/custom.min.js"></script>
    <script>
    function validate(){

        var a = document.getElementById("makepassword").value;
        var b = document.getElementById("confirm_password").value;
        if (a!=b) {
        alert("Passwords do no match");
        return false;
        }}
    </script>
</body>
</html>