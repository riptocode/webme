<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="User Management Apps" name="description" />
    <meta content="Ricode" name="Ripto.id" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico') ?>">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/materialdesignicons.min.css') ?>" />

    <!--pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pe-icon-7-stroke.css') ?>" />

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/magnific-popup.css') ?>">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>" />

</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index.html">
                <img src="<?php echo base_url('images/logo-light.png') ?>" alt="" class="logo-light" height="18" />
                <img src="<?php echo base_url('images/logo-dark.png') ?>" alt="" class="logo-dark" height="18" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#demo" class="nav-link">Demos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#clients" class="nav-link">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" type="button" class="nav-link2 btn font-weight-bold"
                            style="background-color: #ff5e62;"><span class="mdi mdi-account-key"></span>
                            login</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
    <!-- Navbar End -->

    <!-- Content start -->
    <?= $this->renderSection('content'); ?>

    <!-- footer start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="footer-logo mb-3">
                            <img src="<?php echo base_url('images/logo-light.png') ?>" alt="" height="20">
                        </div>
                        <p class="text-white-50 mb-4">2020 © Ricode. Design by <a href="#" target="_blank"
                                class="text-white-50">Ripto</a> </p>

                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>


    <!-- javascript -->
    <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('js/scrollspy.min.js') ?>"></script>

    <!-- Magnific Popup -->
    <script src="<?php echo base_url('js/jquery.magnific-popup.min.js') ?>"></script>

    <!-- counter js -->
    <script src="<?php echo base_url('js/counter.int.js') ?>"></script>

    <!-- custom js -->
    <script src="<?php echo base_url('js/app.js') ?>"></script>
</body>

</html>