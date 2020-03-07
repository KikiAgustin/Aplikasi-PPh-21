<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title><?= $title; ?></title>
    <link rel="apple-touch-icon" href="<?= base_url('app-assets/'); ?>images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/'); ?>images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>vendors/materialize-stepper/materialize-stepper.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>css/pages/form-wizard.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/'); ?>css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
                <nav class="display-none search-sm">
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><span class="logo-text hide-on-med-and-down">CV Maestro Bisa</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">person</i><span class="menu-title" data-i18n="">Admin</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class=""><a class="collapsible-body " href="<?= base_url('admin/orderJakarta'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Order Jakarta</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class=""><a class="collapsible-body " href="<?= base_url('user/home'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pesan latihan</span></a>
                        </li>
                        <li class=""><a class="collapsible-body " href="<?= base_url('user'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Home</span></a>
                        </li>
                        <li><a class="collapsible-body" href="<?= base_url('user/edit'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Edit Profile</span></a>
                        </li>
                        <li><a class="collapsible-body" href="<?= base_url('user/changePassword'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Ganti Password</span></a>
                        </li>
                        <li><a class="collapsible-body" href="<?= base_url('auth/logout'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Logout</span></a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">people_outline</i><span class="menu-title" data-i18n="">Pelatih</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class=""><a class="collapsible-body " href="<?= base_url('user/dataPelatih'); ?>" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Data Pelatih</span></a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><?= $title; ?></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">User</a>
                                </li>
                                <li class="breadcrumb-item active"><?= $title; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-form-wizard">


                        <!-- Horizontal Stepper -->
                        <form action="" method="post">
                            <div class="row">
                                <div class="col s12">
                                    <div class="card">
                                        <div class="card-content pb-0">
                                            <div class="card-header">
                                                <h4 class="card-title">Tambah data order</h4>
                                                <?= form_open_multipart('user/edit'); ?>
                                            </div>
                                            <ul class="stepper " id="horizStepper">
                                                <li class="step active">
                                                    <div class="step-title waves-effect">Data Siswa </div>
                                                    <div class="step-content">
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="name_siswa">Nama Siswa </span></label>
                                                                <input type="text" id="name_siswa" name="name_siswa" value="<?= set_value('name_siswa'); ?>" class="validate">
                                                                <?= form_error('name_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="nama_ortu">Nama Orang Tua </label>
                                                                <input type="text" class="validate" id="nama_ortu" name="nama_ortu" value="<?= set_value('nama_ortu'); ?>">
                                                                <?= form_error('nama_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <select class="error validate" name="jk" id="jk" aria-required="true" required>
                                                                    <option disabled selected>Jenis Kelamin</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="usia">Usia </label>
                                                                <input type="text" class="validate" id="usia" name="usia" value="<?= set_value('usia'); ?>">
                                                                <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="nama_sekolah">Nama Sekolah</span></label>
                                                                <input type="text" class="validate" id="nama_sekolah" name="nama_sekolah" value="<?= set_value('nama_sekolah'); ?>">
                                                                <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="telepon">Telepon</label>
                                                                <input type="text" class="validate" id="telepon" name="telepon" value="<?= set_value('telepon'); ?>">
                                                                <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="alamat_tinggal">Alamat Tinggal</span></label>
                                                                <input type="text" class="validate" id="alamat_tinggal" name="alamat_tinggal" value="<?= set_value('alamat_tinggal'); ?>">
                                                                <?= form_error('alamat_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="kolam">Pilih Kolam</label>
                                                                <input type="text" class="validate" id="kolam" name="kolam" value="<?= set_value('kolam'); ?>">
                                                                <?= form_error('kolam', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <select class="error validate" name="kelas" id="kelas" aria-required="true" required>
                                                                    <option disabled selected>Pilih Paket</option>
                                                                    <option value="Bandung 1 Siswa 4 Pertemuan">Bandung 1 Siswa 4 Pertemuan</option>
                                                                    <option value="Bandung 1 Siswa 8 Pertemuan">Bandung 1 Siswa 8 Pertemuan</option>
                                                                    <option value="Bandung 2 Siswa 4 Pertemuan">Bandung 2 Siswa 4 Pertemuan</option>
                                                                    <option value="Bandung 2 Siswa 8 Pertemuan">Bandung 2 Siswa 8 Pertemuan</option>
                                                                    <option value="Bandung 3/4 Siswa 4 Pertemuan">Bandung 3/4 Siswa 4 Pertemuan</option>
                                                                    <option value="Bandung 3/4 Siswa 8 Pertemuan">Bandung 3/4 Siswa 8 Pertemuan</option>
                                                                    <option value="Jakarta 1 Siswa 4 Pertemuan">Jakarta 1 Siswa 4 Pertemuan</option>
                                                                    <option value="Jakarta 1 Siswa 8 Pertemuan">Jakarta 1 Siswa 8 Pertemuan</option>
                                                                    <option value="Jakarta 2 Siswa 4 Pertemuan">Jakarta 2 Siswa 4 Pertemuan</option>
                                                                    <option value="Jakarta 2 Siswa 8 Pertemuan">Jakarta 2 Siswa 8 Pertemuan</option>
                                                                    <option value="Jakarta 3/4 Siswa 4 Pertemuan">Jakarta 3/4 Siswa 4 Pertemuan</option>
                                                                    <option value="Jakarta 3/4 Siswa 8 Pertemuan">Jakarta 3/4 Siswa 8 Pertemuan</option>
                                                                </select>
                                                                <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>

                                                        </div>
                                                        <div class="step-actions">
                                                            <div class="row">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="step-actions">
                                                <div class="row">
                                                    <div class="col m2 s12 mb-3">
                                                        <a href="<?= base_url('admin/orderjakarta') ?>" class="red btn gradient-45deg-red-pink" type="reset">
                                                            Kembali
                                                        </a>
                                                    </div>
                                                    <div class="col m4 s12 mb-3">
                                                        <button type="submit" name="submit" class="btn gradient-45deg-green-teal">
                                                            Tambah Order
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>



                        <!-- Linear Stepper -->

                        <div class="row">
                            <div class="col s12">
                                <ul class="stepper linear" id="linearStepper">
                                    <li class="step">
                                        <div class="step-content">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Non Linear Stepper -->

                        <div class="row">
                            <div class="col s12">
                                <ul class="stepper" id="nonLinearStepper">
                                    <li class="step active">
                                        <div class="step-actions"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->

        <!-- BEGIN: Footer-->

        <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
            <div class="footer-copyright">
                <div class="container"><span>&copy; 2019 <a href="#" target="_blank">MAESTRO BISA</a> All rights reserved.</span><span class="right hide-on-small-only"></div>
            </div>
        </footer>

        <script src="<?= base_url('app-assets/'); ?>js/vendors.min.js" type="text/javascript"></script>
        <script src="<?= base_url('app-assets/'); ?>vendors/materialize-stepper/materialize-stepper.min.js"></script>
        <script src="<?= base_url('app-assets/'); ?>js/plugins.js" type="text/javascript"></script>
        <script src="<?= base_url('app-assets/'); ?>js/custom/custom-script.js" type="text/javascript"></script>
        <script src="<?= base_url('app-assets/'); ?>js/scripts/customizer.js" type="text/javascript"></script>
        <script src="<?= base_url('app-assets/'); ?>js/scripts/form-wizard.js" type="text/javascript"></script>
</body>

</html>