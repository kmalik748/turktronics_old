<?php
    $page_identifier = "./";
    $page_title = "Contact Us";
    require 'modules/app.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'modules/head.php'; ?>
</head>
    <body>
        <?php require 'modules/navbar.php'; require 'modules/chat_btn.php'; ?>


        <div class="container">
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center lead mx-auto mb-5">Questions? Please do not hesitate to contact us
                    directly. We will return to you at our earliest possible.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="modules/chat_btn.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input placeholder="Full Name" type="text" id="name" name="username" class="form-control">
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input placeholder="Email"  type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input placeholder="Subject"  type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea">Message</textarea>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="mt-3">
                                <?php
                                $num1 = rand(0, 10);
                                $num2 = rand(0, 10);
                                $num3 = $num1 + $num2;
                                ?>
                                <input type="hidden" name="cap_value" value="<?php echo md5($num3); ?>">
                                <b>Are you Human?</b>
                                <?php echo $num1.' + '.$num2.' = '; ?><input class="captcha" type="number" name="captcha">
                            </div>

                            <div class="text-center text-md-left">
                                <input name="send_mail" type="submit" class="mt-3 text-white d-block w-25 btn btn-primary" value="Send">
                            </div>

                        </form>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p class="m-0"><i>CEO Muhammad Ahmad</i><br> 848F St 40 Sector C PWD Islamabad Highway 44000 Pakistan</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p class="m-0">+92 345 2124124</p>
                                <p class="m-0">+92 332 475 2950</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p class="m-0">tech.support@turktronics.com</p>
                                <p class="m-0">ahmad@turktronics.com</p>
                                <p class="m-0">engr.aahmad@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>



        <?php require 'modules/footer.php'; ?>
    </body>

</html>
