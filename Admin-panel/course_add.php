<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){

    header("location: http://localhost/IPD%20Codes/WeekEnd/WeekEnd/login.php" );
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
                        <h4 class="text-center">Our Courses </h4>
                        </div>
                        <div class="col">
                            <h6><a href="courses.php">View Courses</a></h6>
                        </div>
                    </div>

                <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
     {

 $title =  $_POST['ctitle'];
  $detail = $_POST['cdetail'];
//   $duration = $_POST['cduration'];
  $rgstart = $_POST['reg_start'];
  $instructor = $_POST['instructor'];
  $rgend = $_POST['reg_end'];
  $start = $_POST['cstart'];
  $end = $_POST['cend'];
  $fee = $_POST['fee'];

 $course_image =  $_FILES['course_image'];

 print_r($course_image);

 $filenamex =  $course_image['name'];
$tmp_location = $course_image['tmp_name'];

  $filename  =  strtolower($filenamex);

  $input = explode('.',$filename);
 $inputtype =  strtolower(end($input));
 $allowedtype  =array('jpg' , 'png' , 'jpeg');

if(in_array($inputtype , $allowedtype)){
  echo "type matched";
  $distination  = 'courseimages/' .$filename;
  $distinationx  = 'ipd/courseimages/' .$filename;
  echo "perminnet address is " .$distinationx; 
  echo "file distination is " .$distination;
  // echo "this is type " . $type_input;
  move_uploaded_file($tmp_location  , $distinationx);
  echo "uploaded to file ";  
} 

  


  $duration  = 6;


      
       $email = $_SESSION['email'];
       $query1 = "select * from users where users.email ='$email'  ";
       $result = mysqli_query($con , $query1);
       $rows = mysqli_num_rows($result);
       if($rows>0){
           while($data = mysqli_fetch_array($result)){
           $userid =     $data['id'];
          

$querys  = " INSERT INTO `courses` (`ctitle`, `cdetail`, `cduration`, `cstart`, 
`cend`, `userid` ,`Instructor` ,`reg_lastdate` , `class_start_date` , `course_fee` , `course_image`) 
VALUES ( '$title', '$detail', '$duration', '$start', '$end', '$userid' ,'$instructor' , '$rgstart' , 
'$rgend' , '$fee' ,'$distination');";
           
           $result2 = mysqli_query($con , $querys);
           if($result2){
               echo "submitted successfully...";
           }
       }        
     }
   }   ?>

   
<!-- add course -->

<div class="container">
<form action="course_add.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Courses Title  </label>
    <input type="text" required name="ctitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course Detail </label>
    <textarea  cols="6" required rows="6" type="text" name="cdetail" class="form-control"></textarea>
  </div>

  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Instructor </label>
    <!-- <input  cols="6" rows="6" type="text" name="instructor" class="form-control"></input> -->
    <Select required name="instructor">
    <option value="">Choose Instructor</option>
    <?php 
  $inst = "select * from users ";
$resut = mysqli_query($con , $inst);
$rwo = mysqli_num_rows($resut);
if($rwo>0){
    while($dat = mysqli_fetch_array($resut))
    {
       ?> 
       
        <option value="<?php echo $dat['name'] ?>"><?php echo $dat['name'] ?></option>
        
        <?php }} ?>
    </Select>
  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Registration Start </label>
    <input required type="date"  class="form-control" name="reg_start"/>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Registration End </label>
    <input type="date" required class="form-control" name="reg_end"/>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class Timing Start </label>
    <input type="date" required class="form-control" name="cstart"/>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class Timing End </label>
    <input type="date" required class="form-control" name="cend"/>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course Fee </label>
    <input type="int" required class="form-control" name="fee"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course Image </label>
    <input type="file" required class="form-control" name="course_image"/>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




 
            </div>
 
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
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
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