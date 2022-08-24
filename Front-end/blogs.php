<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPD KIU COURSES</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/blog.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- navbar starts here -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between navigation shadow fixed-top">
            <a class="navbar-brand mr-5 text-white ml-5 w-20" href="#" data-value="home"><img src="./assets/logo/logo.svg" alt="brand img"></a>
            <div class=" d-flex align-items-center">
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-align-justify text-white"></i>
            </button>
            <div class="collapse navbar-collapse menu-bar">
                <ul class=" navbar-nav">
                    <li class="nav-item active ">
                        <a class="h5 " href="index.php" data-value="about">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Home</button><span  class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="h5  " href="aboutus.php" data-value="Portfolio">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">About Us</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li><a href="staff.php" class="d-block">Meet Our Team</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Vision</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Culture</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Services</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Facilities</a></li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item ">
                        <a class="h5 "href="courses.php" data-value="blog">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Courses</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li class="hover-me"><a href="#">IT Courses <i class="fas fa-angle-right text-dark"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="webdiv.php">Web Development</a></li>
                                          <li><a href="graphic_d.php">Graphic Desiging</a></li>
                                          <li><a href="python.php">Python Programming</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="hover-me"><a href="#">Language Courses <i class="fas fa-angle-right text-dark"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="#">English Language</a></li>
                                          <li><a href="#">Chinnese Language <i class="fas fa-angle-right text-dark"></i></a>
                                            <div class="sub-menu-3">
                                              <ul>
                                                  <li><a href="hsk_I.php">HSK I</a></li>
                                                  <li><a href="hsk_II.php">HSK II</a></li>
                                                  <li><a href="hsk_III.php">HSK III</a></li>
                                                  <li><a href="hsk_IV.php">HSK IV</a></li>
                                              </ul>
                                          </div>
                                          </li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="hover-me"><a href="#">Other Courses <i class="fas fa-angle-right text-dark"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="shorthand.php">Shorthand Writing</a></li>
                                          <li><a href="ielts.php">IELTS Preparatory </a></li>
                                          <li><a href="huawei.php">Huawei Mechatronics </a></li>
                                      </ul>
                                  </div>
                              </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="#" data-value="blog">
                          <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Blogs</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="contact.php" data-value="blog">
                          <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Contact Us</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="#" data-value="blog">
                          <button type="button" class=" font-weight-normal btn btn-success nav-btn text-white px-lg-4">Enroll Now</button>
                      </a>
                      <div class="sub-menu-1">
                        <ul>
                          <li><a href="enroll.php">As Student</a></li>
                          <li><a href="trainer.php">As trainer</a></li>
                        </ul>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->
    <div class="py-5 bg-light"></div>
    <div class="py-5 bg-light"></div>
<!-- blogs starts here -->
<div class="container-fluid p-0 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                               
        <?php
$con =  mysqli_connect('localhost' , 'root' , '' ,'db_ipd');

 
$query = "SELECT * FROM `blog`";
$result = mysqli_query($con , $query);
$rows = mysqli_num_rows($result); ?>

<div class="">
<div class="row">
<?php
if($rows >0){
   while($data = mysqli_fetch_array($result)){

?>

                        <div class="col-md-12">
                            <article class="shadow article mb-5">
                                <div class="img-outer">
                                <img src="<?php echo $data['blog_image'] ?>" height="300" width="300" class="card-img rounded-0" alt="" />
                                  
                                   
                                </div>

                                <div class="py-3">
                                    <a class="text" href="#">
                                        <div class="px-3"><i class="fas fa-calendar-alt"></i> August 17,
                                            2020</div>
                                    </a>
                                    <a class="text" href="#">
                                        <h4 class="px-3 my-3 text-border">
                                        <?php echo $data['b_title'] ?>
                                        </h4>
                                    </a>
                                    <p class="px-3 text-dark">
                                    <?php echo $data['b_content'] ?>
                                         </p>
                                </div>
                            </article>
                        </div>


                       

                    
                    </div>
                </div>
                <?php }} ?>
                <div class=" offset-1 col-lg-3">
                    <aside class="mb-5">
                        <form role="search" method="get" class="" action="#">
                            <div class="d-flex">
                                <input type="text" class="p-3 w-100" name="s" placeholder="Search..." value="" />
                                <div class="input-group-append bg-info">
                                    <button class="btn p-3" type="submit">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </aside>
                    <!-- categories section starts here -->
                    <div class=" my-3" id="categories-3">
                        <div>
                            <h4 class="py-3 font-weight-bold">Categories</h4>
                        </div>
                        <ul class="p-0">
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Latest Event
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Virtual assistant
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i>Graphic Designing
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Laptop
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Trainers
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Speed on Track
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Uncategorized
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- catogerious section ends here -->

                    <!-- latest section starts here -->
                    <div class="Latest-post py-3" id="Latest-post">
                        <div>
                            <h4 class="my-3 font-weight-bold">Latest Post</h4>
                        </div>
                        <ul class="p-0">
                            <li class="mt-3 row">
                                <div class="col-5">
                                    <img src="./assets/img/freelancing.png" alt="vehicles" class="w-100 card-img-top">
                                </div>
                                <div class="col-7">
                                    <a href="#" class="text-decoration-none categories-link">
                                        <h5 class="">Blog Heading goes here...</h5>
                                        <p class="">
                                            <i class="fas fa-calendar-week text-dark mr-2"></i>
                                            <span class="">August 01, 2022</span>
                                        </p>
                                    </a>
                                </div>
                            </li>
                            <li class="mt-3 row">
                                <div class="col-5">
                                    <img src="./assets/img/Cafeteria.jpg" alt="vehicles" class="w-100 card-img-top">
                                </div>
                                <div class="col-7">
                                    <a href="#" class="text-decoration-none categories-link">
                                        <h5 class="">Blog Heading goes here...</h5>
                                        <p class="">
                                            <i class="fas fa-calendar-week text-dark mr-2"></i>
                                            <span class="">August 01, 2022</span>
                                        </p>
                                    </a>
                                </div>
                            </li>
                            <li class="mt-3 row">
                                <div class="col-5">
                                    <img src="./assets/img/umberlla_in_streets.jpg" alt="vehicles" class="w-100 card-img-top">
                                </div>
                                <div class="col-7">
                                    <a href="#" class="text-decoration-none categories-link">
                                        <h5 class="">Blog Heading goes here...</h5>
                                        <p class="">
                                            <i class="fas fa-calendar-week text-dark mr-2"></i>
                                            <span class="">August 01, 2022</span>
                                        </p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- latest section ends here -->

                    <!-- popular-tags section starts here -->
                    <div class="popular-tags py-3" id="Latest-post">
                        <div>
                            <h4 class="my-3 font-weight-bold">Popular Tags</h4>
                        </div>
                        <ul class="p-0">

                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Coding</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">News</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Design</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Events</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Trainers</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Languages</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Marketing</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Content</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Success</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Software</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">training</a>
                            </li>
                        </ul>
                    </div>
                    <!-- popular tags ends here -->

                    <!-- Archive posts section starts here -->
                    <div class="popular-tags py-3" id="Latest-post">
                        <div>
                            <h4 class="my-3 font-weight-bold">Archive Posts</h4>
                        </div>
                        <ul class="p-0">

                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> July 2022
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> August 2022
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> September 2022
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> October 2022
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> November 2022
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Archive posts section ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- blogs ends here -->
            <!-- footer starts here -->
    <div class="container-fluid p-0 bg-dark pt-5">
        <div class="container d-flex flex-column justify-content-between flex-md-row py-4">
        <div class="container d-flex flex-column  text-white">
                <img src="./assets/logo/logo.svg" class="w-50" alt="">
                <p class="lead text-white py-4 m-0 w-50"> <i class="fas fa-location-pin"></i> opposite to Karakorum international university Gilgit Main Branch</p>
                <i class="fas fa-phone-alt py-2">&nbsp; &nbsp; &nbsp; 05811456789</i>
                <i class="fas fa-envelope py-2">&nbsp; &nbsp; &nbsp; ipd@gmail.com</i>
                <div class="d-flex mt-3">
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-facebook"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-twitter"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-success rounded-circle fa-google"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-white text-danger rounded-circle fa-youtube"></i></a>
                </div>
            </div>

            <div class=" text-white">
                <h3 class="text-white py-3 font-weight-bolder ml-md-5 ml-0 text-info">Quick links</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column mx-md-5 ml-0">
                        <a href="#" class="text-white lead py-2">Home</a>
                        <a href="#" class="text-white lead py-2">About Us</a>
                        <a href="#" class="text-white lead py-2">Our Team</a>
                        <a href="#" class="text-white lead py-2">Courses</a>
                        <a href="#" class="text-white lead py-2">Blogs</a>
                    </div>
                    <div class="d-flex flex-column mx-md-5 ml-0">
                        <a href="#" class="text-white lead py-2">Trainers</a>
                        <a href="#" class="text-white lead py-2">Developers</a>
                        <a href="#" class="text-white lead py-2">Testimonials</a>
                        <a href="#" class="text-white lead py-2">Services</a>
                        <a href="#" class="text-white lead py-2">FAQ'S</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-white w-75 mx-auto">
        <div class="container">
            <p class=" text-center lead text-white py-4 m-0">© 2022 Copyright KIU. All Rights Reserved | Developed by IT Section KIU</p>
        </div>
    </div>
    <!-- footer ends here -->
    </div>
</body>
</html>