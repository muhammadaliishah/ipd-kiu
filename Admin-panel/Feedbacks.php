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
                
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">USers Feedbacks</h4>
                        </div>
                        <div class="col">
                            <h6><a href="dashboard.php">Goto Home</a></h6>
                        </div>
                    </div>
                </div>

               
<!-- feedbackss  -->
<?php 


$query  = "SELECT * FROM `feedbacks`";

$result =  mysqli_query($con , $query);
$row = mysqli_num_rows($result);
if($row >0){
    ?>
       
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">
      <?php  if($_SESSION['role'] =='admin') {?>
      Action
      <?php  }?>
    </th>
     
    </tr>
  </thead>
  <tbody>
    <?php 
     while($data = mysqli_fetch_assoc($result)){
        

    ?>
    <tr>
      <td scope="row"><?php echo $data['f_id']; ?></td>
      <td scope="row"><?php echo $data['f_name']; ?></td>
      <td scope="row"><?php echo $data['f_email']; ?></td>
      <td scope="row"><?php echo $data['f_messagae']; ?></td>
      <td scope="row">
      <?php  if($_SESSION['role'] =='admin') {?>
      <a href="?del=<?php echo $data['f_id'] ?>">Delete</a> 
      <?php } ?> 
      </td>
   
    </tr>
    <?php   }
}
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del'])){
   $del =  $_GET['del'];
   $querydel = "delete from feedbacks where f_id =$del";
   $resultdel = mysqli_query($con , $querydel);
   if($resultdel){
    $deleted;
   }
}
?>

  </tbody>
</table>

 
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


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php" >Logout</a>
                </div>
            </div>
        </div>
    </div>