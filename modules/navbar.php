<!--Top Black Line-->
<div class="top-black-row">
    <div id="topRowContent" class="container py-1">
        <div class="clearfix">
            <div class="row d-flex float-left">
                <div id="blackrow_section">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+923118484848" class="text-white">
                        <span class="fontsize-smaller">+92 345 2124124</span>
                    </a>
                </div>
                <div id="blackrow_section" class="ml-4">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contact@turktronics.com" class="text-white">
                        <span class="fontsize-smaller">contact@turktronics.com</span>
                    </a>
                </div>
            </div>
            <div class="row d-flex float-right">
                <div id="blackrow_section">
                    <a href="#" class="text-white">
                        <i class="fab fa-facebook-f text-primary"></i>
                    </a>
                </div>
                <div id="blackrow_section" class="ml-4">
                    <a href="#" class="text-white">
                    <i class="fab fa-whatsapp text-success"></i>
                    </a>
                </div>
                <div id="blackrow_section" class="ml-4">
                    <a href="#" class="text-white">
                    </a>
                    <i class="fab fa-twitter text-primary"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Top Nav Bar-->
<nav class="navbar navbar-expand-lg bg-light" id="topNavBar">
    <div class="container">
            <a class="navbar-brand" href="./">
                <img class="h-50px img-fluid" src="<?php echo $page_identifier; ?>assets/img/logo/logo.png">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page_title == "Home Page") echo "active"; ?>" href="./">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page_title == "Portfolio") echo "active"; ?>" href="portfolio.php">
                        <i class="fas fa-tasks"></i>
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page_title == "Contact Us") echo "active"; ?>" href="contact.php">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>