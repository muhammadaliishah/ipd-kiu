<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IPD KIU COURSES</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css" />
    <link rel="stylesheet" href="./css/courses.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- navbar starts here -->
    <nav
        class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between navigation shadow fixed-top">
        <a class="navbar-brand mr-5 text-white ml-5 w-20" href="#" data-value="home"><img src="./assets/logo/logo.svg"
                alt="brand img" /></a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-align-justify text-white"></i>
            </button>
            <div class="collapse navbar-collapse menu-bar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="h5" href="index.php" data-value="about">
                            <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                                Home</button><span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="h5" href="aboutus.php" data-value="Portfolio">
                            <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                                About Us
                            </button>
                        </a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="staff.php" class="d-block">Meet Our Team</a></li>
                                <li><a href="aboutus.php" class="d-block">Our Vision</a></li>
                                <li><a href="aboutus.php" class="d-block">Our Culture</a></li>
                                <li>
                                    <a href="aboutus.php" class="d-block">Our Services</a>
                                </li>
                                <li>
                                    <a href="aboutus.php" class="d-block">Our Facilities</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="h5" href="courses.php" data-value="blog">
                            <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                                Courses
                            </button>
                        </a>
                        <div class="sub-menu-1">
                            <ul>
                                <li class="hover-me">
                                    <a href="#">IT Courses <i class="fas fa-angle-right text-dark"></i></a>
                                    <div class="sub-menu-2">
                                        <ul>
                                            <li><a href="webdiv.php">Web Development</a></li>
                                            <li><a href="graphic_d.php">Graphic Desiging</a></li>
                                            <li><a href="python.php">Python Programming</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me">
                                    <a href="#">Language Courses
                                        <i class="fas fa-angle-right text-dark"></i></a>
                                    <div class="sub-menu-2">
                                        <ul>
                                            <li><a href="#">English Language</a></li>
                                            <li>
                                                <a href="#">Chinnese Language
                                                    <i class="fas fa-angle-right text-dark"></i></a>
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
                                <li class="hover-me">
                                    <a href="#">Other Courses <i class="fas fa-angle-right text-dark"></i></a>
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
                    <li class="nav-item">
                        <a class="h5" href="blogs.php" data-value="blog">
                            <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                                Blogs
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="h5" href="contact.php" data-value="blog">
                            <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                                Contact Us
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="h5" href="#" data-value="blog">
                            <button type="button" class="font-weight-normal btn btn-success nav-btn text-white px-lg-4">
                                Enroll Now
                            </button>
                        </a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="#">As Student</a></li>
                                <li><a href="trainer.php">As trainer</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->


    <!-- forms starts here -->
    <div class="container-fluid bg-light p-0 home-intro">
        <h2 class="text-center ml-5 py-5 text-dark font-weight-bolder">
            <span class="border-bottom-2 pb-2">Student Application Form</span>
        </h2>
        <div class="container-fluid mb-5 py-5">
            <form class="w-90 mx-auto text-center" action="./enroll.php" method="POST">
                <!-- personal information starts here -->
                <h2 class="text-left p-3 text-dark">Personal Information</h2>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="First-Name">First Name</label>
                        <input type="text" class="form-control" id="First-Name" name="First-Name" placeholder="Jhon" />
                    </div>

                    <div class="col form-group text-left">
                        <label for="Last-Name">Last Name</label>
                        <input type="text" class="form-control" id="Last-Name" name="lastname" placeholder="Doe" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std-Gender">Gender</label>
                        <select required name="Std-Gender" id="Std-Gender" class="form-control">
                            {{old('Std-Gender')}}
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std-Religion">Student Religion</label>
                        <select required name="Std-Religion" id="Std-Religion" class="form-control">
                            {{(old('Std-Religion'))}}
                            <option value="">Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Christian">Christian</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Atheist">Atheist</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std-D_O_B">Date of Birth</label>
                        <input type="date" name="Std-D_O_B" id="Std-D_O_B" placeholder="dd-mm-yyyy"
                            class="form-control" />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std-CNIC">CNIC</label>
                        <input type="number" name="Std-CNIC" id="Std-CNIC" class="form-control"
                            placeholder="00000-0000000-0" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std-Nationality"> Nationality</label>
                        <input type="text" name="Std-Nationality" id="Std-Nationality" placeholder="Pakistan"
                            class="form-control" />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std-Address">Address</label>
                        <input type="text" name="Std-Address" id="Std-Address" class="form-control"
                            placeholder="street 123 " />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std-Number">Cell Number</label>
                        <input type="number" name="Std-Number" id="Std-Number" placeholder="+92300000000"
                            class="form-control" />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std-Email">Email</label>
                        <input type="email" name="Std-Email" id="Std-Email" class="form-control"
                            placeholder="example12@.com" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Course-select">Select Course</label>
                        <select required name="Course-select" id="Course-select" class="form-control">
                            {{old('Course-select')}}
                            <option value="">Select Course</option>
                            <option value="Shorthand Writing">Shorthand Writing</option>
                            <option value="Python Programming">Python Programming</option>
                            <option value="IELTS Preparatory class">
                                IELTS Preparatory class
                            </option>
                            <option value="Chineese Language HSK I">
                                Chineese Language HSK I
                            </option>
                            <option value="Chineese Language HSK II">
                                Chineese Language HSK II
                            </option>
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="Web Development">Web Development</option>
                            <option value="and many More..">and many More..</option>
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Course-Knowledge">Course Knowledge</label>
                        <select required name="Course-Knowledge" id="Course-Knowledge" class="form-control">
                            {{old('Course-Knowledge')}}
                            <option value="">Course Knowledge</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advance">Advance</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="">Passport Pic</label>
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input type="file" name="Std-Pic" class="custom-file-input" id="Std-Pic" required />
                                <label class="custom-file-label" for="Std-Pic">Choose
                                    file...</label>
                            </div>
                        </div>
                    </div>
                    <div class="col form-group text-left">
                        <label for="">Domicile</label>
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="Std-Domicile" id="Std-Domicile" />
                                <label class="custom-file-label" for="Std-Domicile">Choose
                                    file...</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- personal information starts here -->

                <!-- father information starts here -->
                <h2 class="text-left p-3 text-dark">Guardian / Father Information</h2>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian-Name">Guardian Name</label>
                        <input type="text" class="form-control" id="Guardian-Name" name="Guardian-Name"
                            placeholder="Jhon Doe">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian-Occupation">Guardian Occupation</label>
                        <input type="text" class="form-control" id="Guardian-Occupation" name="Guardian-Occupation"
                            placeholder="Businessman">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian-Email">Guardian Email</label>
                        <input type="Email" class="form-control" id="Guardian-Email" name="Guardian-Email"
                            placeholder="Example12@.com">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian-Number">Guardian Number</label>
                        <input type="number" class="form-control" id="Guardian-Number" name="Guardian-Number"
                            placeholder="+92312345678">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian-Cnic">Guardian CNIC</label>
                        <input type="number" class="form-control" id="Guardian-Cnic" name="Guardian-Cnic"
                            placeholder="00000-0000000-0">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian-Relation">Relation with Guardian</label>
                        <input type="datetime" class="form-control" id="Guardian-Relation" name="Guardian-Relation"
                            placeholder="Father">
                    </div>
                </div>
                <!-- father information ends here -->
                <hr class="w-90 mx-auto" />

                <!-- educational information starts here -->
                <h2 class="text-left p-3 text-dark">Education Information</h2>
                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std-Education">Enter your maximum Qualification</label>
                        <select required name="Std_Education" id="Std_Education" class="form-control" >
                            <option value="">Education level</option>
                            <option value="Secondary">Secondary</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>
                            <option value="p.h.d">p.h.d</option>
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Edu_Institute">Institute Name</label>
                        <input type="text" class="form-control" id="Edu_Institute" name="Edu_Institute" placeholder="High school">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Edu_Institute">Year of Passing</label>
                        <input type="date" class="form-control" id="Edu_Institute" name="year_of_passing" placeholder="dd-mm-yyyy">
                    </div>
                </div>
                <!-- education information ends here -->

                <!-- Payment method starts here -->
                <h2 class="text-left p-3 text-dark">Payment Information</h2>
                <div class="form-row">
                    <div class="col form-group text-left">
                    <label for="Bank_Name">Bank Name</label>
                        <input type="text" class="form-control" id="Bank_Name" name="Bank_Name" placeholder="National Bank of pakistan">
                    </div>
                    <div class="col form-group text-left">
                        <label for="challan_no">Challan Number</label>
                        <input type="text" class="form-control" id="challan_no" name="challan_no" placeholder="5276835">
                    </div>
                    <div class="col form-group text-left">
                        <label for="challan_DOB">Date of submition</label>
                        <input type="date" class="form-control" id="challan_DOB" name="challan_DOB" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="col form-group text-left">
                        <label for="">image of challan</label>
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="challan-image" id="Std-Domicile" />
                                <label class="custom-file-label" for="Std-Domicile">Choose
                                    file...</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Payment method ends here -->

                <button type="submit"
                    class="btn btn-primary text-white px-3 py-2 mt-5 mx-auto d-block rounded font-weight-bold">
                    Submit Form
                </button>
            </form>
        </div>
    </div>
    <!-- forms ends here -->


    <?php



$con = mysqli_connect('localhost' , 'root', '' , 'db_ipd');




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$First_Name = $_POST['First-Name']; 
$lastname = $_POST['lastname'];
$Std_Gender = $_POST['Std-Gender'];
$Std_Religion =$_POST['Std-Religion'];
$Std_D_O_B = $_POST['Std-D_O_B'];
$Std_CNIC = $_POST['Std-CNIC'];
$Std_Nationality = $_POST['Std-Nationality'];
$Std_Address = $_POST['Std-Address'];
$Std_Number = $_POST['Std-Number'];
$Std_Email = $_POST['Std-Email'];
$Course_select = $_POST['Course-select'];
$Course_Knowledge = $_POST['Course-Knowledge'];
$Std_Pic = $_POST['Std-Pic'];
$Std_Domicile = $_POST['Std-Domicile'];
$Guardian_Name = $_POST['Guardian-Name'];
$Guardian_Occupation =$_POST['Guardian-Occupation'];
$Guardian_Email = $_POST['Guardian-Email'];
$Guardian_Number = $_POST['Guardian-Number'];
$Guardian_Cnic = $_POST['Guardian-Cnic'];
$Guardian_Relation = $_POST['Guardian-Relation'];
$Std_Education = $_POST['Std_Education'];
$Edu_Institute = $_POST['Edu_Institute'];
$year_of_passing = $_POST['year_of_passing'];
$Bank_Name = $_POST['Bank_Name'];
$challan_no = $_POST['challan_no'];
$challan_DOB = $_POST['challan_DOB'];
$challan_image = $_POST['challan-image'];




$query  = "INSERT INTO `student_enrollment` (`std_id`, `std_fname`, `std_lname`, `std_gender`, `std_religion`, `std_dob`, `std_cnic`, `std_nationallity`, `std_address`, `std_number`, `std_email`, `std_course_select`, `std_knowledge`, `std_pic`, `std_domicile`, `std_guardian_name`, `std_guardian_occupation`, `std_guardian_email`, `std_guardian_number`, `std_guardian_cnic`, `std_guardianrelation`, `std_education`, `std_institute`, `std_passing_year`, `bank_name`, `bank_challan_no`, `bank_date`, `bank_image`) VALUES (NULL, '$First_Name', '$lastname', '$Std_Gender', '$Std_Religion', '$Std_D_O_B', '$Std_Nationality', '$Std_Address', '$Std_Number', '$Std_Email', '$Course_select', '$Course_Knowledge', '$Std_Pic', '$Std_Domicile', '$Guardian_Name', '$Guardian_Occupation', '$Guardian_Email', '$Guardian_Number', '$Guardian_Cnic', '$Guardian_Relation', '$Std_Education', '$Std_Education', '$Edu_Institute', '$year_of_passing', '$Bank_Name', '$challan_no', '$challan_DOB', '$challan_image')";

    

$result = mysqli_query($con , $query);
if($result){
    echo "data inserted successfully";
}



}


?>


    <!-- footer starts here -->
    <div class="container-fluid p-0 bg-dark pt-5">
        <div class="container d-flex flex-column justify-content-between flex-md-row py-4">
            <div class="container d-flex flex-column text-white">
                <img src="./assets/logo/logo.svg" class="w-50" alt="" />
                <p class="lead text-white py-4 m-0 w-50">
                    <i class="fas fa-location-pin"></i> opposite to Karakorum
                    international university Gilgit Main Branch
                </p>
                <i class="fas fa-phone-alt py-2">&nbsp; &nbsp; &nbsp; 05811456789</i>
                <i class="fas fa-envelope py-2">&nbsp; &nbsp; &nbsp; ipd@gmail.com</i>
                <div class="d-flex mt-3">
                    <a href="#" class="text-white pr-4"><i
                            class="fab lead p-2 bg-primary rounded-circle fa-facebook"></i></a>
                    <a href="#" class="text-white pr-4"><i
                            class="fab lead p-2 bg-primary rounded-circle fa-twitter"></i></a>
                    <a href="#" class="text-white pr-4"><i
                            class="fab lead p-2 bg-success rounded-circle fa-google"></i></a>
                    <a href="#" class="text-white pr-4"><i
                            class="fab lead p-2 bg-white text-danger rounded-circle fa-youtube"></i></a>
                </div>
            </div>

            <div class="text-white">
                <h3 class="text-white py-3 font-weight-bolder ml-md-5 ml-0 text-info">
                    Quick links
                </h3>
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
        <hr class="bg-white w-75 mx-auto" />
        <div class="container">
            <p class="text-center lead text-white py-4 m-0">
                © 2022 Copyright KIU. All Rights Reserved | Developed by IT Section
                KIU
            </p>
        </div>
    </div>
    <!-- footer ends here -->
</body>

</html>