<?php
ob_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

require 'admin/class/db.php';

if (isset($_POST['user_login_btn'])) {
  $logmsg = $obj->user_login($_POST);
}

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  if ($id) {
    header('location:user/index.php');
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
                                    Boarding House</h3>
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>

                                        <?php if(isset($logmsg)){ ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        <?php
                                      echo $logmsg;
                                    ?>

                                    </div>
                                    <?php } ?>
                                    </div>
                                <p class=" mb-4" style="color: white;"> </p>
                                <form action="" autocomplete="off" class="" method="POST">
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                                </svg></span>


                                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address"
                                                aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
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
                                                aria-label="Username" name="password" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <center><button type="submit" name="user_login_btn"
                                            class="btn btn-block text-uppercase mb-2 rounded-pill shadow-sm" style=" font-size:18px; font-weight: 600; background-color: #EF6C35; color:white; padding: 0.7rem 1.3rem;">Sign
                                            in</button></center>
                                </form>
                                <p class="mb-4" style="color: white;">Don't have an account? <a href="signup.php">Sign up.</a></p>
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