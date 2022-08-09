<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>SI Potensi - <?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/app-assets/images/ico/apple-icon-120.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/pickers/pickadate/pickadate.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/extensions/daygrid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/extensions/timegrid.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/app-user.css">

    <!-- DatePicker -->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- End DatePicket -->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- SELECT 2  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?= userdata('nama'); ?></span><span class="user-status">Online</span></div><span><img class="round" src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= site_url('auth/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url() ?>assets/html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="feather icon-copyrigth"></div>
                        <h2 class="brand-text mb-0">Si-Potensi</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <?php if (userdata('role') == 1 || userdata('role') == 2) { ?>
                    <li <?= $this->uri->segment(1) == 'dashboard' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('dashboard') ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                    </li>
                    <li class=" navigation-header"><span>Rekap Data Potensi</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'gudep' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('gudep') ?>"><i class="feather icon-x-circle"></i><span class="menu-title" data-i18n="Tanggungan">Gudep</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'saka' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('saka') ?>"><i class="feather icon-x-circle"></i><span class="menu-title" data-i18n="Tanggungan">Saka</span></a>
                    </li>
                    <li class=" navigation-header"><span>Report Management</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'berita' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('berita') ?>"><i class="feather icon-save"></i><span class="menu-title" data-i18n="Laporan">Data berita</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'laporan' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('laporan') ?>"><i class="feather icon-save"></i><span class="menu-title" data-i18n="Laporan">Laporan Kegiatan</span></a>
                    </li>
                    <li class=" navigation-header"><span>Member Management</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'anggota' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('anggota') ?>"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Laporan">Data Anggota</span></a>
                    </li>
                <?php } ?>
                <?php if (userdata('role') == 1) { ?>
                    <li class=" navigation-header"><span>Control</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'wilayah' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('wilayah') ?>"><i class="feather icon-save"></i><span class="menu-title" data-i18n="Laporan">Wilayah</span></a>
                    </li>
                    <li class=" navigation-header"><span>User Management</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'user' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('user') ?>"><i class="feather icon-users"></i><span class="menu-title" data-i18n="User Management">User Management</span></a>
                    </li>
                <?php } ?>
                <?php if (userdata('role') == 3) { ?>
                    <li class=" navigation-header"><span>HEEEEH</span>
                    </li>
                    <li <?= $this->uri->segment(1) == 'wilayah' ? 'class="active nav-item"' : 'nav-item' ?>><a href="<?= site_url('wilayah') ?>"><i class="feather icon-save"></i><span class="menu-title" data-i18n="Laporan">HEEEH</span></a>
                    </li>
                <?php } ?>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Content -->
                <?php echo $contents ?>
                <!-- Content ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="text-bold-800 grey darken-2" href="#">DATA POTENSI ANGGOTA GERAKAN PRAMUKA,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block"></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?= base_url() ?>assets/assets/js/ajax.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>

    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/daygrid.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/timegrid.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/interactions.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/forms/select/form-select2.js"></script>
    <!-- <script src="<?= base_url() ?>assets/app-assets/js/scripts/pages/dashboard-analytics.js"></script> -->

    <!-- CKEDITOR -->
    <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>

    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor2')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor3')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

    <script>
        var hoursLabel = document.getElementById("hours");
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        setInterval(setTime, 1000);

        function setTime() {
            secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
            minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
            hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }

        <?php if (@$this->session->absen_needed) : ?>
            var absenNeeded = '<?= json_encode($this->session->absen_needed) ?>';
            <?php $this->session->sess_unset('absen_needed') ?>
        <?php endif; ?>
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangalrange').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#tanggalrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });

        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
    </script>


</body>
<!-- END: Body-->

</html>