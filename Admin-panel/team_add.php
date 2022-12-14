<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){

    header("location: http://localhost/ipdcheck-master/Admin-panel/login.php" );
    exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="container-fluid">                
                
                                <!-- Begin Page Content -->
                                <div class="container-fluid">                
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Add Instructor </h4>
                        </div>
                        <div class="col">
                            <h6><a href="team.php">View Team Members</a></h6>
                        </div>
                    </div>
                

<!-- add team -->

<div class="container">
<form action="team_add.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Instructor Name </label>
    <input type="text" required name="instructor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" required name="inst_email" class="form-control"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact Number</label>
    <input type="number" required name="inst_num" class="form-control"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Create Password </label>
    <input type="text" required name="inst_pass"  class="form-control"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Conform Password</label>
    <input type="text" required name="inst_conform_pass" class="form-control"/>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Choose Profile</label>
    <input required type="file" name="inst_profile" class="form-control"/>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

 
            </div>

            <?php 

            if(isset($_POST['submit'])){
         
                $con = mysqli_connect('localhost', 'root' , '' , 'db_ipd');
         $name =    $_POST['instructor'];
         $email =    $_POST['inst_email'];
         $num =    $_POST['inst_num'];
         $pass =    $_POST['inst_pass'];
         $cpass =    $_POST['inst_conform_pass'];
         $inst_profile =    $_FILES['inst_profile'];

          $filenamex=  $inst_profile['name'];
          $file_temp_location =  $inst_profile['tmp_name'];
        
          print_r( $inst_profile);

          $filename = strtolower($filenamex);

          $filetype =   explode('.', '$filename');

          $type_input =   strtolower(end($filetype));
          $allowed_type = array('jpg','jpeg','png');

          if(in_array($type_input , $filetype) ){
            
            echo "thiss is tessting image ";
            $distination  = 'images/' .$filename;
            echo "file distination is " .$distination;
            echo "this is type " . $type_input;
            move_uploaded_file($file_temp_location  , $distination);
            
            

    
        $role = "instructor";

         $query = "INSERT INTO `users`(`name`, `email`, `password`, `cpassword`,
          `role`, `location`, `birthday`, `phonenum` , `inst_profile`) VALUES ('$name' ,'$email',
          '$pass' ,'$cpass','$role' , 'Gilgit' , '' , '$num',' $distination ' )";

$result = mysqli_query($con , $query);
if($result){
    echo "saved successfully";
}  }

            }

            ?>
 
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;  IPD Test Website</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
 






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>