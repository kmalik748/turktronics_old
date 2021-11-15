<?php
    $page_identifier = "./";
    $page_title = "Portfolio";
    require 'modules/app.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'modules/head.php'; ?>
</head>
    <body>
        <?php require 'modules/navbar.php'; require 'modules/chat_btn.php'; ?>


        <h1 class="my-4 text-center font-weight-light">Our Best Projects</h1>

            <div class="container">
                <div class="row project-section py-3 bg-light-1">
                    <div class="col-3">
                        <img class="project-img img-fluid rounded" src="assets/img/projects/zenit/1.jpg">
                        <button class="btn btn-success w-100 mt-1">Live Preview</button>
                    </div>
                    <div class="col-9">
                        <div class="project-heading nav-item-fonts">
                            <h3 class="display-6">Smart Energy Monitoring And Distribution System</h3>
                            <p>
                                This project was designed for a IoT based Company. In which server was recieving
                                data from different devices through REST APIs, and visualizing the data in form
                                of charts and different status.<br> There are two dashboards in this project. One for administrator,
                                and other one is for Client. Client can manage and monitor his IoT devices. Admin have all rights to the client accout.
                            </p>
                        </div>
<!--                        Gallery         -->
                        <h5>Galley:</h5>
                        <div class="project-gallery">
                            <a target="_blank" href="assets/img/projects/zenit/login.jpg">
                                <img src="assets/img/projects/zenit/login.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/zenit/admin-dashboard.jpg">
                                <img src="assets/img/projects/zenit/admin-dashboard.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/zenit/graphs.jpg">
                                <img src="assets/img/projects/zenit/graphs.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/zenit/1.jpg">
                                <img src="assets/img/projects/zenit/1.jpg">
                            </a>
                        </div>
                        <!--End of gallery-->
                    </div>
                </div>
                <div class="row project-section py-3 bg-light-1 mt-4">
                    <div class="col-3">
                        <img class="project-img img-fluid rounded" src="assets/img/projects/powerdiverter/1.jpg">
                        <button class="btn btn-success w-100 mt-1">Live Preview</button>
                    </div>
                    <div class="col-9">
                        <div class="project-heading nav-item-fonts">
                            <h3 class="display-6">Smart Power Meter</h3>
                            <p>
                                This product is designed to create a Smart Industrial Power Monitor System. In this product, we offered complete solution to manage and control the power flow mechanism in the industrial unit. The current, volts and power parameters are sensed and recorded efficiently. Dashboards are designed to visualize and analyze data accordingly. Security features such as warning alerts and relay cut off mechanism are introduced for greater safety and protection of maintenance staff. Any alarm and harmful activity will be immediately notify to maintenance staff via email service.
                            </p>
                        </div>
<!--                        Gallery         -->
                        <h5>Gallery:</h5>
                        <div class="project-gallery">
                            <a target="_blank" href="assets/img/projects/powerdiverter/1.jpg">
                                <img src="assets/img/projects/powerdiverter/1.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/powerdiverter/2.jpg">
                                <img src="assets/img/projects/powerdiverter/2.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/powerdiverter/3.jpg">
                                <img src="assets/img/projects/powerdiverter/3.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/powerdiverter/4.jpg">
                                <img src="assets/img/projects/powerdiverter/4.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/powerdiverter/5.jpg">
                                <img src="assets/img/projects/powerdiverter/5.jpg">
                            </a>
                        </div>
                        <!--End of gallery-->
                    </div>
                </div>
                <div class="row project-section py-3 bg-light-1 mt-4">
                    <div class="col-3">
                        <img class="project-img img-fluid rounded" src="assets/img/projects/smartgate/1.jpg">
                        <button class="btn btn-success w-100 mt-1">Live Preview</button>
                    </div>
                    <div class="col-9">
                        <div class="project-heading nav-item-fonts">
                            <h3 class="display-6">Smart Access Control System</h3>
                            <p>
                                Smart Access Control System offer complete solution for building management. It offer verity of options such as smart access control from any part of the world. Notification and data recording of all incoming and outgoing human traffic in the buildings and offices. It create smart schedules and allow users to get access to resources during defined timings only. It handles guest users efficiently.

                            </p>
                        </div>
<!--                        Gallery         -->
                        <h5>Gallery:</h5>
                        <div class="project-gallery">
                            <a target="_blank" href="assets/img/projects/smartgate/1.jpg">
                                <img src="assets/img/projects/smartgate/1.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/smartgate/2.jpg">
                                <img src="assets/img/projects/smartgate/2.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/smartgate/3.jpg">
                                <img src="assets/img/projects/smartgate/3.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/smartgate/4.jpg">
                                <img src="assets/img/projects/smartgate/4.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/smartgate/5.jpg">
                                <img src="assets/img/projects/smartgate/5.jpg">
                            </a>
                            <a target="_blank" href="assets/img/projects/smartgate/6.jpg">
                                <img src="assets/img/projects/smartgate/6.jpg">
                            </a>
                        </div>
                        <!--End of gallery-->
                    </div>
                </div>
            </div>


        <?php require 'modules/footer.php'; ?>
    </body>

</html>
