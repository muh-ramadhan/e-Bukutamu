<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>e - Bukutamu</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="<?php echo base_url() ?>assets/reguler/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link href="<?php echo base_url() ?>assets/reguler/login-v1.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/base/light.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/reguler/aside/dark.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/reguler/favicon-bukutamu.ico" />
    </head>
    <body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                    <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(<?php echo base_url() ?>assets/reguler/bg-4.jpg);">
                        <div class="kt-grid__item">
                            <a href="#" class="kt-login__logo">
                                <img src="<?php echo base_url() ?>assets/reguler/logo-bukutamu.png" style="width: 60px; height: 60px;">
                            </a>
                        </div>
                        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                            <div class="kt-grid__item kt-grid__item--middle">
                                <h3 class="kt-login__title">e - Bukutamu</h3>
                                <h4 class="kt-login__subtitle">Ini adalah aplikasi e - Bukutamu yang disediakan untuk Instansi Pemerintahan di Lingkup Kabupaten Tanjung Jabung Timur</h4>
                            </div>
                        </div>
                        <div class="kt-grid__item">
                            <div class="kt-login__info">
                                <div class="kt-login__copyright">
                                    Copyright &copy 2019 e - Bukutamu Versi 1.1
                                </div>
                                <div class="kt-login__menu">
                                    <a href="mailto:muh.ramadhan@email.com" class="kt-link">Email</a>
                                    <a href="https://api.whatsapp.com/send?phone=6282191272636&text=Halo%20Saya%20Butuh%20Informasi%20Terbaru" class="kt-link">Whatsapp</a>
                                    <a href="http://diskominfo.tanjabtimkab.go.id" class="kt-link">Kantor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
                        <div class="kt-login__body">
                            <div class="kt-login__form">
                                <div class="kt-login__title">
                                    <h3>Masuk</h3>
                                </div>
                                <?php if(isset($error)) { echo $error; }; ?>
                                <form class="kt-form" method="POST" action="<?php echo base_url() ?>login" novalidate="novalidate">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Nama Pengguna" name="nama_pengguna" autocomplete="off" autofocus>
                                        <?php echo form_error('nama_pengguna'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Kata Sandi" name="kata_sandi">
                                        <?php echo form_error('kata_sandi'); ?>
                                    </div>
                                    <div class="kt-login__actions">
                                        <a href="#" class="kt-link kt-login__link-forgot">
                                        </a>
                                        <button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Masuk</button>
                                    </div>
                                </form>
                                <div class="kt-login__divider">
                                    <div class="kt-divider">
                                        <span></span>
                                        <span>Tentang Developer</span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="kt-login__options">
                                    <a href="https://www.facebook.com/sumastik" class="btn btn-primary kt-btn">
                                        <i class="fab fa-facebook-f"></i>
                                        Facebook
                                    </a>
                                    <a href="https://twitter.com/MR_MuhRamadhan" class="btn btn-info kt-btn">
                                        <i class="fab fa-twitter"></i>
                                        Twitter
                                    </a>
                                    <a href="https://www.instagram.com/MR_MuhRamadhan/" class="btn btn-danger kt-btn">
                                        <i class="fab fa-google"></i>
                                        Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>
        <script src="<?php echo base_url() ?>assets/reguler/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/reguler/scripts.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/reguler/login-v1.js" type="text/javascript"></script>
    </body>
</html>