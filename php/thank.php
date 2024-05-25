<?php 

 $username = $_POST['username'];
 $password = $_POST['password'];

 $db_hostname = "localhost";
 $db_username = "u967844700_2023acumeen";
$db_userpassword = 'Acumeen@2023@';
$db_name = 'u967844700_acumeen';
                                        
$conn = mysqli_connect($db_hostname,$db_username,$db_userpassword, $db_name);
 if(mysqli_connect_error())
    echo "Connection Error.";
 else
    echo "Database Connection Successfully.";





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- <link rel="stylesheet" href="css/style_admin.css"> -->
    <link rel="icon" href="img/logo/JPG.jpg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>




    <title>Acumeen | Home</title>


    <style>
        .container{
            /* margin-top: -10px; */
        }

        .container-2{
            margin-top: 60px;
           margin-bottom: -20px;
           text-align: center;
        }

        .container-2 h3{
           font-weight: 900;
           font-size: 5rem;
        }
    </style>


</head>

<body>



    <!-- Main Content Section -->
    <main>

        <!-- Nav-bar -->
        <div class="w3-top">
            <div class="w3-bar w3-card w3-display-container" id="myNavbar">

                <a href="index.html" class="w3-bar-item w3-wide logo">ACUMEEN</a>


                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small nav-2 w3-display-right w3-margin-right" id="navInside">
                    <a href="index.html" class="w3-bar-item rel"><i class="fa fa-home fa-beat"></i></a>
                    <a href="about.html" class="w3-bar-item">ABOUT US</a>
                    <a href="Interior_service.html" class="w3-bar-item"> SERVICES</a>
                    <a href="projects.html" class="w3-bar-item">PROJECTS</a>
                    <!-- <a href="" onclick="openModal()" class="w3-bar-item estimate">Get Estimate</a> -->


                    <a href="registration.html" target="_blank" class="estimation-btn w3-bar-item">Get A Callback</a>

                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                <a href="javascript:void(0)"
                    class="cross w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium w3-display-right w3-margin-right"
                    style="    background-color: transparent !important; font-size: 32px;" onclick="w3_open()">
                    <i class="fa fa-bars"></i> </a>
            </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
            style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close
                ×</a>
            <a href="index.html" class="w3-bar-item rel"><i class="fa fa-home"></i></a>
            <a href="about.html" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
            <a href="Interior_service.html" onclick="w3_close()" class="w3-bar-item w3-button">SERVICES</a>
            <a href="projects.html" onclick="w3_close()" class="w3-bar-item w3-button">PROJECTS</a>

            <a href="registration.html" target="_blank" class="estimation-btn w3-bar-item">Get A Callback</a>
        </nav>


        <div class="container-2 row">
            <h3 class="card-title">Welcome Admin2</h3>
        </div>



        <div class="container ">


            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List of Customers Having Estimation Query</h4>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="POST" class="form-class">
                                        <div class="form-group">
                                            <input type="text" name="get_id" placeholder="Enter Mobile No or Email of Customer" required
                                                class="form-control input_field">
                                        </div>

                                        <button type="submit" name='search_by_id' class="btn btn-primary mb-3 btn-class">
                                            Search</button>
                                    </form>

                                </div>
                            </div>



                            <div class="table-responsive">
                                <table class="table table-bordered text-center">

                                    <thead>
                                        <tr class="bg-dark text-white col-6">
                                            <th scope="col">Sr. No.</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile No.</th>
                                            <th scope="col">Architecture</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        
                                         $base_username = "241amit";
                                        
                                         $base_password = "Ayodhya";
                                         
                                         
                                              
                                              echo $username + " " ;
                                              echo $password + " ";

                                              if ($username == $base_username and $password == $base_password) {
                                                  echo 'authentication Done';

                                                    $query = "SELECT * FROM `registration`  ORDER BY id desc ";
                                                           $result = $mysqli_query($query);


                                              } else {
                                                        echo "Please enter correct admin credencial.";
                                                      }
                                       
                                        $count = 1;
                                       
                                      
                                            if (isset($_POST['search_by_id'])) {
                                                $id = $_POST['get_id'];
                                                $query = "SELECT * FROM registration WHERE ( mobile = '$id' OR email = '$id' ) order by id desc";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                        ?>
    
                                                        <tr class="text-muted" >
                                                            <th font-weight-100>
                                                                <?php echo $count; $count++;?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['name']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['email']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['mobile']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['architecture']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['reg_time']; ?>
                                                            </th>
                                                        </tr>
    
                                                        <?php
    
                                                    }
                                                } else {
                                                    ?>
                                            <tr>
                                                <td colspan="6">No Record Found</td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            else{
                                                $query = "SELECT * FROM registration  order by id desc";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                        ?>
    
                                                        <tr class="text-muted" >
                                                            <th font-weight-100>
                                                                <?php echo $count; $count++;?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['name']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['email']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['mobile']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['architecture']; ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $row['reg_time']; ?>
                                                            </th>
                                                        </tr>
    
                                                        <?php
    
                                                    }
                                                }
                                            }
                                          

                                        
                                        
                                        ?>

                                    </tbody>


                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>

    </main>






    <!-- Footer Section -->
    <footer class="footer-section" id="contact-s">
        <div class="footer-body">
            <div class="ft-section" id="ft-company-section-1">
                <h6 class="ft-heading">About Zeeals</h6>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="registration.html" target="_blank">Register Youself With Us</a></li>
                    <li><a href="projects.html">Our Top Projects</a></li>
                    <li><a href="">Our Partners</a></li>
                    <li><a href="">Photo Gallery</a></li>
                </ul>
            </div>

            <div class="ft-section" id="ft-company-section-2">
                <h6 class="ft-heading">Our Services</h6>

                <ul>
                    <li><a href="service-3.html">Exterior And Interior Painting</a></li>
                    <li><a href="service-4.html">All Type False Ceiling Work</a></li>
                    <li><a href="service-5.html">All Type Gypsum Plaster Work</a></li>
                    <li><a href="service-6.html">Civil Work ( RCC, Shuttering, AAC Block Work etc )</a></li>
                    <li><a href="service-7.html">Turnkey Interior Services</a></li>
                </ul>
            </div>


            <div class="ft-section" id="ft-company-section-3">
                <h6 class="ft-heading">Contact Us</h6>


                <h6>Head Office Zeeals</h6>
                <p>Shop No.10, MM Road, Sai Niwas, Almeda Building, Kurla West, Mumbai Maharashtra-400070</p>
                <span>Tel:+91 22 67525656</span><br>
                <span>Fax:+91 22 67525858</span><br>
                <span>Send ua a mail: <a href="mainto:info@zeeals.com">info@zeeals.com</a></span>
            </div>

            <div class="ft-section" id="ft-company-section-1">
                <h6 class="ft-heading-1"><a href="#">ZEEALS ENTERPRISES PVT LTD</a> </h6>
                <h7>Follow us on our Social Media Pages</h7>
                <ul class="icons">
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <hr class="my-hr">
        <div class="footer-cpy-right">
            <div class="cpy-content">
                <h6>&copy; 2023 Zeeals Enterprises PVT LIMITED. All rights reserved.</h6>
            </div>
            <div class="cpy-content">
                <h6><a href="copyright.html">COPYRIGHT & TERMS</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a
                        href="privacy.html">PRIVACY
                        POLICY</a></h6>
            </div>
        </div>
    </footer>

    <script src="js/home.js"></script>
    <script src="https://kit.fontawesome.com/58a810656e.js" crossorigin="anonymous"></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>



</body>

</html>