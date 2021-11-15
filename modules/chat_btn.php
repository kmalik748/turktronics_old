<div class="chat_btn">
    <button class="btn btn-outline-dark heading-font-1 bounce-4 bounce_box" data-toggle="modal" data-target="#contact_us">
        QUICK QUOTE
    </button>
</div>



<!-- Conact Us Modal -->
<div class="modal fade" id="contact_us">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <form action="" method="post">
                <div class="modal-header bg-dark" style="color: #acafb1;">
                    <h4 class="modal-title font-weight-light nav-item-fonts ml-3">Leave us a Message</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="container modal-body">
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-font"></i>
                                        </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Full Name" id="usr" name="username">
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </span>
                        </div>
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="message">Message</textarea>
                    </div>
                </div>

                <div class="ml-3 mb-3">
                    <?php
                    $num1 = rand(0, 10);
                    $num2 = rand(0, 10);
                    $num3 = $num1 + $num2;
                    ?>
                    <input type="hidden" name="cap_value" value="<?php echo md5($num3); ?>">
                    <b>Are you Humnan?</b>
                    <?php echo $num1.' + '.$num2.' = '; ?><input class="captcha" type="number" name="captcha">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button name="send_mail" type="submit" class="btn btn-success">
                        <i class="fas fa-comment-alt mr-1"></i>
                        Send
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php
if(isset($_POST["send_mail"])){
//    print_r($_POST);
    $orignal_num = $_POST["cap_value"];
    $name = $_POST["username"];
    $email =  $_POST["email"];
    $body =  $_POST["message"];
    $number =  md5($_POST["captcha"]);

    $from = "Email: ".$email."   \n  ";
    $message = $from.$body;

//    echo $orignal_num.' '.$number;
    if($orignal_num == $number) {
        $msg = 'OK';
        $msg = "First line of text\nSecond line of text";
        $msg = wordwrap($msg,70);
        if(mail("engr.aahmad@gmail.com","Contact Messege from Turktronics", $message)){
            $msg = "Message was sent successfully!";
        }else{
            $msg = "Error while sending message";
        }
    }
    else {
        $msg = 'Captcha value Error!';
    }
    echo '
            <script>alert("'.$msg.'");</script>
            <script>window.location.replace("https://turktronics.com");</script>
        ';
}
?>