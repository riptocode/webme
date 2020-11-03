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
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" />

    <!--Morris Chart-->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/morris-js/morris.css') ?>" />

    <!-- third party css -->
    <link href="<?php echo base_url('assets/libs/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables/responsive.bootstrap4.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables/buttons.bootstrap4.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables/select.bootstrap4.css') ?>" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->


    <!-- Sweet Alert css -->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/app.min.css') ?>" rel="stylesheet" type="text/css" />

</head>

<body class="boxed-layout">

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url('assets/images/users/user-1.jpg') ?>" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1"> <b>Nowak</b>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/dashboard" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url('assets/images/logo-light.png') ?>" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="<?php echo base_url('assets/images/logo-sm.png') ?>" alt="" height="24">
                        </span>
                    </a>
                </div>

            </div> <!-- end container-fluid-->
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/dashboard"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-account-multiple-outline"></i>Users<div class="arrow-down">
                                </div></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="/dashboard/create"><i class="mdi mdi-view-dashboard"></i> Add
                                                User</a>
                                        </li>
                                        <li>
                                            <a href="/dashboard/members"><i class="mdi mdi-view-dashboard"></i> List
                                                Users</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="mdi mdi-lifebuoy"></i>Components <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Forms <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="form-elements.html">General Elements</a>
                                        </li>
                                        <li>
                                            <a href="form-advanced.html">Advanced Form</a>
                                        </li>
                                        <li>
                                            <a href="form-validation.html">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="form-wizard.html">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="form-fileupload.html">Form Uploads</a>
                                        </li>
                                        <li>
                                            <a href="form-quilljs.html">Quilljs Editor</a>
                                        </li>
                                        <li>
                                            <a href="form-xeditable.html">X-editable</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Tables <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="tables-basic.html">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatable.html">Data Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.html">Responsive Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.html">Editable Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-tablesaw.html">Tablesaw Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="inbox.html">Mail</a>
                                </li>

                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-chart-donut-variant"></i>Charts <div class="arrow-down">
                                </div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="charts-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.html">Chartist Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="charts-other.html">Other Charts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-cards-outline"></i>Pages <div class="arrow-down"></div></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="pages-starter.html">Starter Page</a>
                                        </li>
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="extras-projects.html">Projects</a>
                                        </li>
                                        <li>
                                            <a href="extras-tour.html">Tour</a>
                                        </li>
                                        <li>
                                            <a href="extras-taskboard.html">Taskboard</a>
                                        </li>
                                        <li>
                                            <a href="extras-taskdetail.html">Task Detail</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <?= $this->renderSection('content'); ?>
    <!-- For content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    Copyright &copy; 2020 Ricode. Powered by <a href="">Ripto ID</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url('assets/js/vendor.min.js') ?>"></script>

    <!-- knob plugin -->
    <script src="<?php echo base_url('assets/libs/jquery-knob/jquery.knob.min.js') ?>"></script>

    <!--Morris Chart-->
    <script src="<?php echo base_url('assets/libs/morris-js/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/raphael/raphael.min.js') ?>"></script>

    <!-- third party js -->
    <script src="<?php echo base_url('assets/libs/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/dataTables.bootstrap4.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/buttons.flash.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/dataTables.keyTable.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/datatables/dataTables.select.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/pdfmake/vfs_fonts.js') ?>"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>


    <!-- Dashboard init js-->
    <script src="<?php echo base_url('assets/js/pages/dashboard.init.js') ?>"></script>

    <!-- App js-->
    <script src="<?php echo base_url('assets/js/app.min.js') ?>"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

    <!-- Sweet alert init js-->
    <script src="<?php echo base_url('assets/js/pages/sweet-alerts.init.js') ?>"></script>

</body>

</html>