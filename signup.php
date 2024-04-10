<?php
ob_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

require 'admin/class/db.php';

if (isset($_POST['user_reg_btn'])) {
  $logmsg = $obj->user_register($_POST);
}

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  if ($id) {
    header('location:index.php');
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cylert Boarding House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link href="admin/assets/img/hh.png" rel="icon">
    <link href="admin/assets/img/hh-icon.png" rel="apple-touch-icon">

    <style>
    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://tourism.biliranisland.com/wp-content/uploads/2015/08/Bishemar-Apartelle-4.jpg');
        background-size: cover;
        background-position: center center;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-6 bg-dark text-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-xl-7 mx-auto">

                                <h3 class="display-4" style="font-size: 90px; font-family: 'Bebas Neue', sans-serif;">
                                    <img src="admin/assets/img/hh.png" style="max-height: 80px; width: auto;"> Cylert
                                    Boarding House
                                </h3>

                                <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Register an account.</h5>
                                        <p class="text-center small">Please provide valid information.</p>

                                        <?php if(isset($logmsg)){ ?>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">

                                        <?php
                                      echo $logmsg;
                                    ?>

                                    </div>
                                    <?php } ?>
                                    </div>

                                <p class=" mb-4" style="color: white;"> </p>
                                <form action="" autocomplete="off" class="" method="POST">


                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                </svg></span>


                                            <input type="text" class="form-control" placeholder="Enter Full Name"
                                                aria-label="Username" name="users_name" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                                </svg></span>


                                            <input type="email" class="form-control" placeholder="Enter Email Address"
                                                aria-label="Username" name="users_email" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-telephone-fill"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg></span>


                                            <input type="text" class="form-control"
                                                placeholder="Enter Mobile Phone Number" aria-label="Username"
                                                aria-describedby="addon-wrapping" name="users_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').slice(0, 11);"
                                                maxlength="11" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                                    <path
                                                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                                </svg></span>


                                            <input type="text" class="form-control" placeholder="Enter Home Address"
                                                aria-label="Username" aria-describedby="addon-wrapping" name="users_add" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                                </svg></span>



                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                aria-label="Username" aria-describedby="addon-wrapping" name="users_pass" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                                </svg></span>


                                            <input type="password" class="form-control" placeholder="Confirm Password"
                                                aria-label="Username" aria-describedby="addon-wrapping" name="users_cpass">
                                        </div>
                                    </div>


                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Pick a Security Questions</label><br>
                                        <div class="input-group mb-3">

                                            <label class="input-group-text" for="inputGroupSelect01"><i
                                                    class="fa-solid fa-bars"></i></label>
                                            <select name="users_sec_ques" class="form-select" id="inputGroupSelect01"
                                                required>
                                                <option value="In what city were you born">In what city were you born</option>
                                                <option value="What is the name of your favorite pet">What is the name of your favorite pet</option>
                                                <option value="What is your mother's maiden name">What is your mother's maiden name</option>
                                                <option value="What high school did you attend">What high school did you attend</option>
                                                <option value="What was the name of your elementary school">What was the name of your elementary school</option>
                                                <option value="What was the make of your first car">What was the make of your first car</option>
                                                <option value="What was your favorite food as a child">What was your favorite food as a child</option>
                                                <option value="Where did you meet your spouse">Where did you meet your spouse</option>
                                                <option value="What year was your father (or mother) born">What year was your father (or mother) born</option>
                                            </select>
                                        </div>
                                        <small>*Picked security question cannot be changed.*</small>

                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Enter Answer to Security Question</label><br>
                                        <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                            placeholder="Security Question" aria-label="Password"
                                                            name="users_sec_ans" value=""
                                                            aria-describedby="addon-wrapping" required>
                                        </div>


                                    <center><button type="submit" name="user_reg_btn"
                                            class="btn btn-block text-uppercase mb-2 rounded-pill shadow-sm"
                                            style=" font-size:18px; font-weight: 600; background-color: #EF6C35; color:white; padding: 0.7rem 1.3rem;">Sign
                                            up</button></center>
                                </form>
                                <p class="mb-4" style="color: white;">Already have an account? <a
                                        href="login.php">Login.</a></p>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/650197440f2b18434fd8455b/1ha73dp1c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>