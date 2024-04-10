<?php

session_start();
include_once("admin/class/adminback.php");
include_once("admin/class/db.php");
$obj = new adminback();




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
    .fakeimg {
        height: 200px;
        background: #aaa;
    }

    .tt:hover {
        color: #f49b75;
        color: #f49b75;
    }


    html {
        max-width: 100%;
        overflow-x: hidden;
    }

    body {
        background-image: url("user/assets/img/ch.jpg");
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */

    }

    .separator {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .separator::before,
    .separator::after {
        content: '';
        flex: 1;
        border-bottom: 8px solid #ff8000;
    }

    .separator:not(:empty)::before {
        margin-right: .25em;
    }

    .separator:not(:empty)::after {
        margin-left: .25em;
    }

    div.transbox {
        margin: 5%;
        background-color: black;
        border: 1px solid black;
        opacity: 0.8;
    }

    div.transbox p,
    h1 {
        margin: 5%;
        color: white;
    }

    div.transbox h4 {
        margin-left: 5%;
        margin-top: 2%;
        color: white;
    }


    div.transbox  span {
        margin-left: 5%;
        margin-top: 2%;
    }

    div.transbox input {
        margin-right: 5%;
        margin-top: 2%;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm" style="color:white; background-color: white;">
        <div class="container-fluid" style=" font-size: 150%;font-family: 'Karla', sans-serif;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto" style="color:white;">
                    <li>
                    <img src="admin/assets/img/hh.png" style="max-height: 80px; width: auto;">
                    </li>
                </ul>
                <form class="d-flex" style="color:#EF6C35;">
                    <a class="navbar-brand"><img src="user/assets/img/email.png" alt="Logo" style="width:40px;"><i
                            class="bi bi-envelope"></i> &nbsp;johnp@gmail.com</a>
                    <a class="navbar-brand"><img src="user/assets/img/tel.png" alt="Logo" style="width:40px;"><i
                            class="bi bi-envelope"></i> &nbsp;+0123456789</a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/fb.png" alt="Logo" style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/in.png" alt="Logo" style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/twt.png" alt="Logo" style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/yt.png" alt="Logo" style="width:40px;"></a>
                </form>
            </div>
        </div>
    </nav>

    <div class="p-5 text-white text-center" style="background-color: #EF6C35;">
        <p style="font-size: 90px; font-family: 'Bebas Neue', sans-serif;">CYLERT BOARDING HOUSE</p>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid" style=" font-size: 170%;font-family: 'Karla', sans-serif;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" style="color:white;">
                            <p class="tt">HOME</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php" style="color:white;">
                            <p class="tt">ROOMS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color:#EF6C35; font-weight: 600;" >
                            <p class="tt">CONTACT US</p>
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" style="color:white;">
                                <p class="tt">LOGIN</p>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="container-fluid ">

        <div class="row ">
            <div class="col-sm-6">
                <div class="transbox">
                    <h1>Countact Us</h1>
                    <h4>Phone: 09363480107</h4>
                    <h4>Email: johnp@gmail.com</h4>
                    <h4>Address: Cross. Sta. Clara Naga Zamboanga Sibugay</h4>
                    <br>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/ff.png" alt="Logo"
                            style="width:40px; margin-left: 5%; margin-right: 2%;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/ii.png" alt="Logo"
                            style="width:40px; margin-right: 2%;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/tt.png" alt="Logo"
                            style="width:40px; margin-right: 2%;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/yy.png" alt="Logo"
                            style="width:40px; margin-right: 2%;"></a>
                    <br><br>

                    <iframe style="margin-left: 5%; margin-bottom: 5%;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15810.749800985575!2d122.66275061165204!3d7.822868311667058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3253de7a5af5bbb9%3A0xc3565655a0951e87!2sCrossing%20Sta.%20Clara%2C%20Zamboanga%20Sibugay!5e0!3m2!1sen!2sph!4v1692844351850!5m2!1sen!2sph"
                        width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="transbox" style="padding-bottom: 25%;">
                    <h1>Sign Up.</h1>
                    <form>
                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg></span>


                                <input type="text" class="form-control" placeholder="Enter Full Name"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                    </svg></span>


                                <input type="email" class="form-control" placeholder="Enter Email Address"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg></span>


                                <input type="text" class="form-control" placeholder="Enter Mobile Phone Number"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                        <path
                                            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                    </svg></span>


                                <input type="text" class="form-control" placeholder="Enter Home Address"
                                    aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg></span>



                                <input type="password" class="form-control" placeholder="Enter Password"
                                    aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg></span>


                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <center><button type="submit" class="btn btn-block text-uppercase mb-2 rounded-pill shadow-sm"
                                style=" font-size:18px; font-weight: 600; background-color: #EF6C35; color:white; padding: 0.7rem 1.3rem;">Sign
                                up</button></center>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>&#169;2023 Cylert BH . All Rights Reserved | Design by Cylert BH</p>
    </div>

</body>

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

</html>