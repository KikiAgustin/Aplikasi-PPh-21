<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title><?= $title; ?></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="../../xampp/htdocs/bismillah/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../xampp/htdocs/bismillah/assets/css/font.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <div class="main-bg">
        <!-- title -->
        <h1>Registrasi Akun</h1>

        <!-- //title -->
        <!-- content -->
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <img width="100px" class="mt-3" src="<?= base_url('assets/img/logo_maestro.png') ?>" alt="" />
                <div class="top-content-style">
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                    <p class="legend">CV Maestro Bisa<span class="fas fa-hand-point-down"></span></p>
                    <div class="input">
                        <input type="text" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                        <span class="fas fa-user-tie"></span>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input">
                        <input type="text" id="email" name="email" placeholder="Email" value="<?= set_value('name'); ?>">
                        <span class="fa fa-envelope"></span>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password" id="password1" name="password1">
                        <span class="fa fa-unlock"></span>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Ulangi Password" id="password2" name="password2">
                        <span class="fa fa-unlock"></span>
                    </div>
                    <button type="submit" class="btn submit">
                        <span class="fas fa-sign-in-alt"></span>
                    </button>
                </form>
                <a href="<?= base_url('auth'); ?>" class="bottom-text-w3ls">Sudah Punya Akun!Login</a>
            </div>
        </div>
        <!-- //content -->
        <!-- copyright -->
        <div class="copyright">
            <h2>&copy; 2019 Latest Login Form. All rights reserved | Design by
                <a href="http://w3layouts.com" target="_blank">W3layouts</a>
            </h2>
        </div>
        <!-- //copyright -->
    </div>
</body>

</html>