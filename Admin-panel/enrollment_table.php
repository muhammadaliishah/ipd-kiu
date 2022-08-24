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
                <div class="container-fluid">
            
                   
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Unpproved Students</h4>
                        </div>
                        <div class="col">
                            <h6><a href="students.php">Check Approved List</a></h6>
                        </div>
                    </div>
                </div>

                
                <h4 class="text-center">
                <?php
             

if(isset($_POST['submit'])){
   
$id =  $_POST['student_id'];
$approval= $_POST['coursefee'];
$queryx = "update  `student_enrollment` set `rg_status`='$approval' 
where rg_id=$id;";

$result = mysqli_query($con, $queryx);
                if($result){
                    echo "updated";
                      echo  'user id is ' . $id;
                }
        
                }
        ?>
                <!-- Begin Page Content -->
                
                <h4 class="text-center"></h4>
                
                <?php 
            
                $query = "select * from student_enrollment where rg_status= 'unpaid'";
                $result = mysqli_query($con , $query);
            $rows  =    mysqli_num_rows($result);
            if($rows >0)
            {
                ?>


<div class="container-fluid"> 



<table class="table">
  <thead>
 
        <th>Profile</th>
        <th>Name</th>
        <th>Courses</th>
        <th>Documents</th>
        <th>Payment Verification</th>
        <!-- <th>Father Name</th> -->
        <th>Payment Option</th>
        <th>Status</th>
        <th>Verify</th>
   
  </thead>

  <?php  
    while($data = mysqli_fetch_array($result)){ ?>
                <tr>
               

    <td> 
    <a href="<?php echo $data['rg_pic']  ?>">  <img style="width:30px; height:30px;" src="<?php echo $data['rg_pic']  ?>" 
>
</a>
         </td> 
<td> <?php echo $data['rg_fname'] . " ". $data['rg_lname']   ?> </td> 
<td> <?php echo $data['rg_select_course'] ?> </td> 
<!-- <td> <img style="width:30px; height:30px;" src="<?php echo $data['rg_domacile']  ?>" alt="">  </td>  -->
<td> <a href="<?php echo $data['rg_domacile'] ?>  ">Open Attachment  </a> </td>
<td> <a href="<?php echo $data['screenshot']  ?>  ">Open Attachment  </a> </td>
<!-- <td> <img style="width:30px; height:30px;" src="<?php echo $data['screenshot']  ?>" alt="">  </td>  -->
                        <!-- <td> <?php echo $data['rg_fname']  ?> </td>  -->
                        <!-- <td> <?php echo $data['rg_fathername'] ?> </td>  -->
                        <td> <?php echo $data['paymentoption'] ?> </td> 
                        <td> <?php echo $data['rg_status'] ?> </td> 

                      <td>
                      <form action="enrollment_table.php" method="POST" enctype="multipart/form-data">

                      <input hidden name="student_id" type="number"  value="<?php echo $data['rg_id']; ?>"  >


                     <Select name="coursefee">
                        <option value="">Please Choose</option>
                        <option value="unpaid">unpaid</option>
                        <option value="paid">paid</option>
                    </Select>
                    <button type="submit" name="submit" value="submit">Update</button>
                    </form>   
</td>   
                </tr>

                <?php } }?>
        
    </tbody>

</table>









<!-- <h4><a href=" ">Approved Students</a></h4>  -->
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
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>


</body>

</html>







       