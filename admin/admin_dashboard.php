<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_dashboard_style.css">
    <link rel="stylesheet" href="bootstrap.min.css">


    <link rel="icon" href="logo.ico" type="image/x-icon">

    




    <title>Acumeen | Admin Dashboard</title>



</head>

<body style="width:100%; margin:auto;">

    <nav class="nav-bar bg-dark text-white">
        <div class="nav-logo">
            <img src="logo.ico" alt="Acumeen Logo" style="">
            <h3 class="nav-logo-name">Acumeen</h3>
        </div>

        <div class="nav-content">
            <h2 class="greet">Welcome, Admin</h2>
            <button class="btn btn-primary"><a href="../admin_login.html" target="_self" class=" text-white">Logout</a></button>
        </div>
    </nav>



    <!-- Main Content Section -->
    <main>


        <div class="container">


            <div class="row">
                <div class="col-md-12 mt-5 pt-2">
                    <div class="card p-4">
                        <div class="card-header">
                            <h4 class="card-title">List of Customers Having Estimation Query</h4>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="POST" class="form-class">
                                        <div class="form-group">
                                            <input type="text" name="get_id"
                                                placeholder="Enter Mobile No or Email of Customer" required
                                                class="form-control input_field">
                                        </div>

                                        <button type="submit" name='search_by_id'
                                            class="btn btn-primary mt-1 btn-class">
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
                                        $db_hostname = "localhost";
                                        $db_username = "u967844700_2023acumeen";
                                        $db_userpassword = 'Acumeen@2023@';
                                        $db_name = 'u967844700_acumeen';

                                        $conn = new mysqli($db_hostname, $db_username, $db_userpassword, $db_name);
                                        
                                        $count = 1;


                                        if (isset($_POST['search_by_id'])) {
                                            $id = $_POST['get_id'];
                                            if($id == 'all' OR $id == 'All'){
                                                $query = "SELECT * FROM registration  order by id desc";
                                            }else{
                                                $query = "SELECT * FROM registration WHERE ( mobile = '$id' OR email = '$id' ) order by id desc";
                                            }
                                           
                                            $query_run = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_array($query_run)) {
                                                    ?>

                                                    <tr class="text-muted">
                                                        <th font-weight-100>
                                                            <?php echo $count;
                                                            $count++; ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['mobile']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['architecture']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['reg_time']; ?>
                                                        </td>
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
                                        } else {
                                            $query = "SELECT * FROM registration  order by id desc";
                                            $query_run = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_array($query_run)) {
                                                    ?>

                                                    <tr class="text-muted">
                                                        <th font-weight-100>
                                                            <?php echo $count;
                                                            $count++; ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['mobile']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['architecture']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['reg_time']; ?>
                                                        </td>
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
    <footer class="footer-container bg-dark text-white">

        <div class="footer-logo" style="">
            <img src="logo.ico" alt="Acumeen Logo" style="width:80px; height:80px;">
            <h3 class="footer-logo-name">Acumeen</h3>
        </div>

        <div class="footer-body">

            <div class="footer-copyright">
                Copyright &copy 2023 Acumeen Enterprises Pvt Ltd. All rights reserved.
            </div>

            <div class="footer-content">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#"> Terms of Use</a></li>
                    <li><a href="#"> Sitemap</a></li>
                </ul>
            </div>
        </div>

    </footer>





</body>

</html>