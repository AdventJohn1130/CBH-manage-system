
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


    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm" style="color:white;">
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
                            class="bi bi-envelope"></i> &nbsp;CylertBH@gmail.com</a>
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
                        <a class="nav-link" href="home.php" style="color:#EF6C35; font-weight: 600;">
                            <p class="tt">HOME</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php" style="color:white;">
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

    <div class="container" style="max-width:100%;margin: 0%; padding:0%;">
        <div class="row">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="user/assets/img/10.jpg" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption" style="justify-content: center; padding-bottom: 15%;">
                            <p style="font-size:50px; font-weight:600;">COMFORT LIVING</p>
                            <p style="font-size:80px; font-weight:800;">COME & ENJOY <BR> PRECIOUS LIVING <BR> WITH US
                            </p>
                            <button type="button" class="btn"
                                style=" font-size:25px; font-weight: 600; background-color: #EF6C35; color:white; padding: 1rem;"
                                data-bs-toggle="modal" data-bs-target="#myModal">LEARN MORE</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="user/assets/img/11.jpg" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption" style="justify-content: center; padding-bottom: 15%;">
                            <p style="font-size:50px; font-weight:600;">COMFORT LIVING</p>
                            <p style="font-size:80px; font-weight:800;">COME & ENJOY <BR> PRECIOUS LIVING <BR> WITH US
                            </p>
                            <button type="button" class="btn"
                                style=" font-size:25px; font-weight: 600; background-color: #EF6C35; color:white; padding: 1rem;"
                                data-bs-toggle="modal" data-bs-target="#myModal">LEARN MORE</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="user/assets/img/back4.jpg" alt="New York" class="d-block" style="width:100%">
                        <div class="carousel-caption" style="justify-content: center; padding-bottom: 15%;">
                            <p style="font-size:50px; font-weight:600;">COMFORT LIVING</p>
                            <p style="font-size:80px; font-weight:800;">COME & ENJOY <BR> PRECIOUS LIVING <BR> WITH US
                            </p>
                            <button type="button" class="btn"
                                style=" font-size:25px; font-weight: 600; background-color: #EF6C35; color:white; padding: 1rem;"
                                data-bs-toggle="modal" data-bs-target="#myModal">LEARN MORE</button>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->


                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

        </div>
    </div>


    <br>
    <br>
    <!-- Container (Services Section) -->
    <div id="services" class="container text-center">
        <h2>SERVICES</h2>
        <h4>What we offer</h4>
        <br>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <img src="user/assets/img/room_489874.png" alt="Logo" style="width:90px;"><br><br>
                <h4>COZY ROOMS</h4>
                <p>Our well-maintained rooms are designed to offer you a comfortable and peaceful stay. Choose from a variety of room sizes and configurations to suit your preferences.</p>
            </div>
            <div class="col-sm-4">
            <img src="user/assets/img/hotel_489870.png" alt="Logo" style="width:90px;"><br><br>
                <h4>FULLY FURNISHED</h4>
                <p>Each room comes fully furnished with essential amenities, including a comfortable bed, study desk, storage space, and more.</p>
            </div>
            <div class="col-sm-4">
            <img src="user/assets/img/wifi_489858.png" alt="Logo" style="width:90px;"><br><br>
                <h4>UTILITIES INCLUDED</h4>
                <p>Say goodbye to the hassle of separate utility bills. We cover electricity, water, and internet expenses, ensuring a seamless living experience.</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
            <img src="user/assets/img/security_489844.png" alt="Logo" style="width:90px;"><br><br>
                <h4>SECURITY</h4>
                <p>Boarding houses can provide a safe environment for Tenants.</p>
            </div>
            <div class="col-sm-4">
            <img src="user/assets/img/hotel_489857.png" alt="Logo" style="width:90px;"><br><br>
                <h4>CONVENIENT LOCATION</h4>
                <p>CYLERT BH is conveniently located near schools and market, making it easy to access transportation, shops, and entertainment options.</p>
            </div>
            <div class="col-sm-4">
            <img src="user/assets/img/customer_489854.png" alt="Logo" style="width:90px;"><br><br>
                <h4 style="color:#303030;">FRIENDLY STAFF</h4>
                <p> Our staff is here to assist you with any inquiries or concerns you may have. We aim to create a supportive and welcoming community for all residents.</p>
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>&#169;2023 Cylert BH . All Rights Reserved | Design by Cylert BH</p>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">CYLERT BOARDING HOUSE</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="user/assets/img/3.jpg" alt="New York" class="d-block" style="width:100%">
                    <h2>We know what you love</h2>
                    <p style="font-size: 24px;">Providing guest unique and enchanting rooms with it’s exceptional
                        amenities. Try our services and
                        friendly staff while you are here.
                    </p>
                </div>

            </div>
        </div>
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