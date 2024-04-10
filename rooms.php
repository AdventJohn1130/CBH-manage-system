<?php

session_start();
include_once("admin/class/adminback.php");
include_once("admin/class/db.php");
$obj = new adminback();


$room = $obj->display_room_bed();
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

    <script src="https://kit.fontawesome.com/a741b189ae.js" crossorigin="anonymous"></script>

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

    div.transbox p {
        margin: 5%;
        color: white;
    }

    div.transbox h4 {
        margin-left: 5%;
        margin-top: 2%;
        color: white;
    }


    div.transbox span {
        margin-left: 5%;
        margin-top: 2%;
    }

    div.transbox input {
        margin-right: 5%;
        margin-top: 2%;
    }

    hr.style-three {
        border: 0;
        border-bottom: 1px dashed #ccc;
        background: #999;
    }

    #featureContainer.container-fluid {
        padding: 0 10%;
    }

    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    @media (max-width: 767px) {
        #featureContainer .carousel-inner .carousel-item>div {
            display: none;
        }

        #featureContainer .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    #featureContainer .carousel-inner .carousel-item.active,
    #featureContainer .carousel-inner .carousel-item-next,
    #featureContainer .carousel-inner .carousel-item-prev {
        display: flex;
    }

    @media (min-width: 768px) {

        #featureContainer .carousel-inner .carousel-item-end.active,
        #featureContainer .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        #featureContainer .carousel-inner .carousel-item-start.active,
        #featureContainer .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }

        #featureContainer .card img {
            width: 90%;
            height: 40vh;
        }

        #featureContainer .carousel-item {
            justify-content: space-between;
        }
    }

    @media (max-width: 767px) {
        #featureContainer .card img {
            width: 100%;
            height: 75vh;
        }
    }

    #featureContainer .carousel-inner .carousel-item-end,
    #featureContainer .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }

    #featureContainer .card {
        border: 0;
    }

    #featureContainer .card {
        position: relative;
    }

    #featureContainer .card .card-img-overlays {
        position: absolute;
        bottom: 15%;
        left: 10%;
    }


    #featureContainer .float-end {}

    .red-color {
        color: #fbb957;
    }

    .light-color {
        color: #fdddac;
    }

    .fa-star {
        height: 5px;
    }

    .checked {
      color: #ffefca;
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
                    <a href="#" class="navbar-brand"><img src="user/assets/img/fb.png" alt="Logo"
                            style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/in.png" alt="Logo"
                            style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/twt.png" alt="Logo"
                            style="width:40px;"></a>
                    <a href="#" class="navbar-brand"><img src="user/assets/img/yt.png" alt="Logo"
                            style="width:40px;"></a>
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
                        <a class="nav-link" href="rooms.php" style="color:#EF6C35; font-weight: 600;">
                            <p class="tt">ROOMS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color:white;">
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
    <section>
        <br>
        <br>
        <div class="separator">
            <p style="font-size: 70px; font-weight: 600;">OUR ROOMS</p>
        </div>
        <h1 class="font-weight-light text-center" style="color:#EF6C35;">EXPLORE OUR ROOMS</h1><br>
        <br>
        <br>
        <div class="container-fluid" id="featureContainer">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">

                    <!-- Carousel Controls. OPTIONAL -->
                    <div class="text-center">

                        <div class="d-grid gap-2 d-md-block">


                        </div>
                        <a class="" href="#featureCarousel" role="button" data-bs-slide="prev">
                            <button class="btn btn-lg rounded-circle" type="button"
                                style="background-color:#f28a5e; color: white;"><i style="padding: 1.7rem 0.3rem;"
                                    class="fa-solid fa-angles-left fa-fade fa-xl"></i></button></a> &nbsp;&nbsp;
                        <a class="w-aut " href="#featureCarousel" role="button" data-bs-slide="next">
                            <button class="btn btn-lg rounded-circle" type="button"
                                style="background-color:#f28a5e; color: white;"><i style="padding: 1.5rem 0.3rem;"
                                    class="fa-solid fa-angles-right fa-fade fa-xl"></i></button></a>
                    </div>

                    <!-- Add Slides To The Carousel -->
                    <div class="carousel-inner" role="listbox" style="">

                        <div class="carousel-item active" style="">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="row text-center" style=" margin-top:30px; padding: 0 0.2%;">
                                        <img style="width:620px; height: 1017px;" src="user/assets/img/six.png"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php while ($rm = mysqli_fetch_assoc($room)){
                                ?>

                        <?php

include_once 'admin/class/Rating.php';
$rating = new Rating();
$itemDetails = $rating->getItem($rm['id']);

$itemRating = $rating->getItemRating($rm['id']);
$ratingNumber = 0;
$count = 0;
$fiveStarRating = 0;
$fourStarRating = 0;
$threeStarRating = 0;
$twoStarRating = 0;
$oneStarRating = 0;
foreach ($itemRating as $rate) {
  $ratingNumber += $rate['ratingNumber'];
  $count += 1;
  if ($rate['ratingNumber'] == 5) {
    $fiveStarRating += 1;
  } else if ($rate['ratingNumber'] == 4) {
    $fourStarRating += 1;
  } else if ($rate['ratingNumber'] == 3) {
    $threeStarRating += 1;
  } else if ($rate['ratingNumber'] == 2) {
    $twoStarRating += 1;
  } else if ($rate['ratingNumber'] == 1) {
    $oneStarRating += 1;
  }
}
$average = 0;
if ($ratingNumber && $count) {
  $average = $ratingNumber / $count;
}
?>

                        <div class="carousel-item">
                            <div class="col-md-4" style="padding: 0 0.2%; ">
                                <div class="card border-0">

                                    <div class="card-img text-center" style="margin-top: 30px; ">
                                        <img style="width:615px; height: auto;"
                                            src="admin/room_img/<?php echo $rm['room_img']?>" class="img-fluid">
                                    </div>


                                    <div class="row text-center" style=" margin:0; padding:2%; border-style: solid;">
                                        <div
                                            style="background-color:#EF6C35; color: white; padding: 0.2rem; border-radius: 26px;">
                                            <h4>Room No. <?php echo $rm['room_no']?> <?php echo $rm['room_name']?>
                                            </h4>
                                        </div>
                                        <div class="row text-center">

                                            <div class="rating">
                                            <center>
                    <h1 class="" style=" opacity:0.9; color:#fbb957; font-size: 55px;"><?php printf('%.1f', $average); ?></h1>

                    <?php
                    $averageRating = round($average, 0);
                    for ($i = 1; $i <= 5; $i++) {
                      $ratingClass = "fa-solid";
                      if ($i <= $averageRating) {
                        $ratingClass = 'fa-solid red-color';
                      }
                    ?>

                      <span style="width:-2px;" class="fa-solid <?php echo $ratingClass ?> fa-star fa-xs" aria-label="Center Align">
                      </span>

                    <?php } ?>
                  </center>
                                            </div>

                                        </div>

                                        <div class="row text-center">
                                            <div class="col">
                                                <br>
                                                <p style="font-size: 25px;">Available Bed in Room:
                                                    <span
                                                        style="font-size: 40px; font-weight: 600; color: #EF6C35;"><?php echo $rm['room_avail']?></span>
                                                </p>
                                            </div>
                                        </div>

                                        <hr class="style-three">

                                        <div class="row text-center">
                                            <div class="col"><i class="fa-solid fa-bed"></i>
                                                <p style="font-size: 25px;"><?php echo $rm['room_bed_no']?> Bed
                                                </p>
                                            </div>
                                            <div class="col"><i class="fa-solid fa-shower"></i>
                                                <p style="font-size: 25px;"><?php echo $rm['room_bath']?> Bathroom
                                                </p>
                                            </div>
                                            <?php if ($rm['room_wifi'] == 1) { ?>
                                            <div class="col"><i class="fa-solid fa-wifi"></i>
                                                <p style="font-size: 25px;">Wifi</p>
                                            </div>
                                            <?php } else {
                                                        echo '';
                                                        } ?>

                                        </div>

                                        <hr class="style-three">

                                        <div class="row text-center">

                                            <div class="col">
                                                <br>
                                                <p style="font-size: 22px; font-weight: 600;">Daily Rate: <br>
                                                    ₱<?php echo $rm['bed_daily']?></p>
                                                <br>
                                            </div>
                                            <div class="col">
                                                <br>
                                                <p style="font-size: 22px; font-weight: 600;">Monthly Rate:
                                                    ₱<?php echo $rm['bed_monthly']?></p>
                                                <br>
                                            </div>
                                            <br><br><br>
                                        </div>
                                        <br><br>
                                        <hr class="style-three">
                                        <center>
                                            <a href="login.php">
                                                <button type="button" class="btn"
                                                    style="font-size:17px; font-weight: 600; background-color: #EF6C35; color:white; padding: 0.4rem 1.9rem; max-width: 200px">AVAIL
                                                    NOW</button></a>
                                            </a>
                                        </center>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>&#169;2023 Cylert BH . All Rights Reserved | Design by Cylert BH</p>
    </div>

</body>

<script>
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>

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