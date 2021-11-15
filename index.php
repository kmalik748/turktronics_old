<?php
$page_identifier = "./";
$page_title = "Home Page";
require 'modules/app.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'modules/head.php'; ?>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
    <body>
        <?php require 'modules/navbar.php'; require 'modules/chat_btn.php'; ?>

        <!--        Index Slider        -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slides/1.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/2.jpg" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/3.jpg" alt="New York" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/4.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/5.jpg" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/6.jpg" alt="New York" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slides/7.jpg" alt="New York" width="1100" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <i class="fas fa-chevron-circle-left fa-4x"></i>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <i class="fas fa-chevron-circle-right fa-4x"></i>
            </a>
        </div>


        <hr>
        <!--About Us Section-->
        <div class="bg-aboutus-image container">
            <div class="row">
                <div class="col-12" id="visible_txt_on_blur">
                    <h2 class="pt-3 heading-font-1 font-weight-bold">About Turktronics</h2>
                    <p class="lead pl-5 pr-5 mb-5 font-weight-light">
                        Turktronics is a smart solution provider in the field of IOT and Embedded System Engineering.
                        Turktronics has heritage in the Industrial Electronics, Internet of Things, Complex PCB boards,
                        Software Designs and Mobile Applications. Create and deploy smart Dashboards to visualize and
                        analyze live data streams of sensors data.
                    </p>
                </div>
            </div>
        </div>
        <!--  New Section      -->
        <div class="container-fluid bg-light-1">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4 mt-5">
                        <h2 class="text-center font-weight-light">
                            <strong>Connect</strong> and  <strong>Manage</strong> your Internet of Things products instantly.
                        </h2>
                        <p class="lead text-justify text-center mt-4">
                            We offer a ready to go and scalable infrastructure for IOT products. Our designed admin and user
                            console allow to integrate and visualized any kind of sensors and systems so our clients can better
                            act and apply business logic. Our REST APIs are secure and efficient.
                        </p>
                    </div>
                    <div class="col-8">
                        <div class="text-center my-3">
                            <img class="h-100 w-100" src="assets/img/turktronics-dashboard.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Another Secition    -->
        <div class="container mt-5">
            <div class="row justify-content-around">
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fas fa-microchip fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">Hardware Design</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                We have experienced hardware team which can take on all kind of hardware designs
                                from simple to complex industrial problems. TURKTRONICS offer complete solution and
                                transform your idea to manufactured products and deliver tested products to your door steps.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fas fa-code fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">Embedded Systems</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                Embedded Systems is core expertise of TURKTRONICS team, we design modern embedded
                                systems based on cost efficient, robust and state of the art components. Turktronics
                                design and deliver all kind of Embedded Systems based on your need and services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fab fa-soundcloud fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">Cloud Applications</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                Modern agile environment demand smart and efficient Web Servers to handle large
                                amount of data from sensors and apps. Our team is expert in designing and deployment
                                of scalable webservers for all kind of user applications. Our designed dashboards help
                                to visualize and analyze data efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">Mobile Apps</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                Our designed mobile apps are able to interact with webservers and custom designed devices.
                                BLE, WIFI and NFC protocols are implemented. We design apps for both Android and ios platforms.
                                Our apps are stable and reliable and well tested before delivery.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fas fa-retweet fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">TEST AUTOMATION</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                TURKTRONICS provide industrial automation services to clients, we offer our complete design
                                and deployment of SCADA, PLC and MODBUS based industrial control systems. Our designs are
                                stable and perform well over the years. Industrial Motor Controls and PID tuning is our core
                                expertise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="index-small-cards">
                        <div class="index-left-favicon mr-3 color-theme">
                            <i class="fas fa-server fa-2x"></i>
                        </div>
                        <div class="index-right-text">
                            <h3 class="color-theme font-weight-light nav-item-fonts">IOT GATEWAY</h3>
                            <p class="lead text-justify font-weight-light font-size-large text-muted">
                                TURKTRONICS deploy IOT gateways. Our team has deployed LORAWAN, SIGFOX and Satellite based
                                IOT gateways for sensor networks and data gathering. IOT in the remote areas depend upon
                                those gateways to send data to central cloud servers, it enable global sensors deployments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  New Section      -->
        <div class="container-fluid bg-light-1">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4">
                        <div class="text-center my-3">
                            <img class="h-100 w-100" src="assets/img/coding.png">
                        </div>
                    </div>
                    <div class="col-8 my-3">
                        <h2 class="text-center font-weight-light">
                            <strong>Awesome</strong> and  <strong>Efficient</strong> coding
                        </h2>
                        <p class="lead text-justify text-center mt-4">
                            We believe that providing an awesome developer experience is a must when adopting new trends
                            of IOT. We deal with machines, but we believe in clean designs for User interaction. Easy
                            to use as well as easy to understand. Our team handle complex coding problem very efficiently.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <!--        Our Clients   -->
        <div class="my-4">
            <h2 class="text-center font-weight-light">
                Our <strong>Clients</strong>
            </h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 align-content-around text-center mt-4" id="clients">
                        <img class="img-thumbnail" src="assets/img/clients/access1technologies.jpg">
                        <img class="img-thumbnail" src="assets/img/clients/zenit.jpg">
                        <img class="img-thumbnail" src="assets/img/clients/powerdiverter.jfif">
                        <img class="img-thumbnail" src="assets/img/clients/shado.png">
                        <img class="img-thumbnail" src="assets/img/clients/DBSlogo.png">
                        <img class="img-thumbnail" src="assets/img/clients/radarShop.jpg">
                        <img class="img-thumbnail" src="assets/img/clients/rtc.png">
                    </div>
                </div>
            </div>
        </div>
    <!--        Projects    -->
        <div class="container-fluid bg-light-1">
            <div class="container mt-5">
                <h2 class="text-center font-weight-light pt-4">
                    <strong>Starting</strong> with the platform
                </h2>
                <p class="lead text-justify text-center">
                    Check out some recently published projects
                </p>
                <div class="row">
                    <!--  Energy Australia Project  -->
                    <div class="col-4">
                        <div class="card shadow-lg" style="width:310px">
                            <img class="card-img-top" src="assets/img/projects/powerdiverter/1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title nav-item-fonts">Smart Power Meter</h4>
                                <p class="card-text">
                                    <?php
                                    $limit = 350;
                                    $txt ="
                                    This product is designed to create a Smart Industrial Power Monitor System. In this product,
                                    we offered complete solution to manage and control the power flow mechanism in the
                                    industrial unit. The current, volts and power parameters are sensed and recorded efficiently.
                                    Dashboards are designed to visualize and analyze data accordingly. Security features such as
                                    warning alerts and relay cut off mechanism are introduced for greater safety and protection
                                    of maintenance staff. Any alarm and harmful activity will be immediately notify to
                                    maintenance staff via email service. ";
                                    echo limit_txt($txt, $limit);
                                    ?>
                                </p>
                                <a href="portfolio.php" class="btn btn-primary stretched-link fontsize-smaller">
                                    More Details
                                </a>
                                <a href="#" class="btn btn-success stretched-link fontsize-smaller">
                                    Live Preview
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  IoT Data Platform  -->
                    <div class="col-4">
                            <div class="card shadow-lg" style="width:310px">
                                <img class="card-img-top" src="assets/img/projects/zenit/1.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title nav-item-fonts">Smart Energy Monitoring and Distribution System</h4>
                                    <p class="card-text">
                                    <?php
                                    $txt ="
                                        The Smart Energy Monitoring System is designed for Australian companies to overcome
                                        the problem of Energy Management in Australia. Efficient grid management and AI based
                                        home appliance control mechanism offer wide range of advantages in context of energy
                                        management. Artificial Intelligence is used to manage and control the Grid Systems
                                        and home appliances of interest. ";
                                    echo limit_txt($txt, $limit);
                                    ?>
                                    </p>
                                    <a href="portfolio.php" class="btn btn-primary stretched-link fontsize-smaller">
                                        More Details
                                    </a>
                                    <a href="#" class="btn btn-success stretched-link fontsize-smaller">
                                        Live Preview
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <!--  Smart Gate  -->
                    <div class="col-4">
                        <div class="card shadow-lg" style="width:310px">
                            <img class="card-img-top" src="assets/img/projects/smartgate/1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title nav-item-fonts">Smart Access Control System</h4>
                                <p class="card-text">
                                    <?php
                                    $txt ="
                                    Smart Access Control System offer complete solution for building management.
                                    It offer verity of options such as smart access control from any part of the world.
                                    Notification and data recording of all incoming and outgoing human traffic in the
                                    buildings and offices. It create smart schedules and allow users to get access to
                                    resources during defined timings only. It handles guest users efficiently. ";
                                    echo limit_txt($txt, $limit);
                                    ?>
                                </p>
                                <a href="portfolio.php" class="btn btn-primary stretched-link fontsize-smaller">
                                    More Details
                                </a>
                                <a href="#" class="btn btn-success stretched-link fontsize-smaller">
                                    Live Preview
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="float-right">
                    <a href="portfolio.php" class="text-black nav-item-fonts ">
                        Visit all Projects..
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </p>
            </div>
        </div>
        <!--        Get In Touch     -->
        <div class="container pt-4">
            <div class="nav-item-fonts text-center" style="font-size: x-large">
                <p class="nav-item-fonts">Start building your IoT products with the right platform!</p>
                <button class="btn btn-outline-dark heading-font-1" data-toggle="modal" data-target="#contact_us">
                    <i class="fas fa-comment-alt mr-2"></i>Leave us a meesage
                </button>
            </div>
        </div>



   <?php //require 'slider-projects.php'; ?>




        <?php require 'modules/footer.php'; ?>
<script>
    $('.fieldset-next').click(function(e) {
        e.preventDefault();
        slide(true);  // console.log(left, width, position);
    });
    $('.fieldset-previous').click(function(e) {
        e.preventDefault();
        slide(false);
    });

    function slide(direction) {
        var left = parseInt($('#fieldset-container fieldset').eq(0).offset().left),
            width = $(window).width(),
            position = (-left/width) + ( direction ? 1 : -1 ),
            length = $('#fieldset-container fieldset').length,
            position = position > length -1 ? length -1 : position;
        slideTo(position);
    }

    function slideTo(n){
        $('#fieldset-container').css('transform', 'translateX(-'+(n * 100) +'vw)');
    }
</script>
    </body>

</html>

<?php
function limit_txt($txt, $length){
    $b = substr($txt,0,$length);
    $b.="<a href='portfolio.php'>... Read More</a>";
    return $b;
}
?>