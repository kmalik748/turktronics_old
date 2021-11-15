<?php
$rand = rand();
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $page_title; ?></title>

<script src="<?php echo $page_identifier; ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo $page_identifier; ?>assets/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="<?php echo $page_identifier; ?>assets/css/bootstrap.min.css?v=<?php echo $rand; ?>" rel="stylesheet">
<!-- Your custom styles  -->
<link href="<?php echo $page_identifier; ?>assets/css/stylesheet.css?v=<?php echo $rand; ?>" rel="stylesheet">
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap|Questrial" rel="stylesheet">
<!-- SLIDER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('send_mail_form', {
            'sitekey' : '6LeLNckUAAAAABD599Qe3BrD5ABukrvG2Sg7oUwF'
        });
    };
</script>