<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="./manifest.webmanifest">
        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Costco Development Team">
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon-16x16.png">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <?php
        $cssfiles = [
            "css/libs.min.css",
            "css/main.css",
        ];
        foreach ($cssfiles as $key => $value) {
            $filepath = base_url("assets/" . $value);
            echo "<link href='$filepath' rel='stylesheet'>\n";
        }
        ?>
        <!-- styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css"/>
        <!-- web-font loader-->
        <?php
        $menulinks = array(
            "Home" => site_url("/"),
            "Equipments" => site_url("equipments"),
            "About" => site_url("about"),
            "Career" => site_url("career"),
            "Contact" => site_url("contact-us"),
        );
        ?>
    <body class="page-home">

        <!-- Loader-->
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
        <!-- Loader end-->

        <div class="page-wrapper">
            <header class="page-header">

                <div class="page-header-bottom" data-uk-sticky>
                    <div class="page-header-bottom__left">
                        <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a></div>
                        <div class="support"> <a class="support__link" href="tel:236-799-5500">
                                <div class="support__icon"><i class="fas fa-headset" style="color:#fd8a37;"></i></div>
                                <div class="support__desc">
                                    <div class="support__label">Get Quick Support</div>
                                    <div class="support__phone">+(852) 9187 7140</div>
                                </div>
                            </a></div>
                    </div>
                    <div class="page-header-bottom__right">
                        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                            <div class="nav-overlay uk-visible@l">
                                <ul class="uk-navbar-nav">
                                    <?php
                                    foreach ($menulinks as $key => $value) {
                                        ?>
                                        <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
                                        <?php
                                    }
                                    ?>
                           
                                </ul>
                            </div>

                        </nav>
                        <a class="uk-navbar-toggle uk-hidden@l" href="#offcanvas" data-uk-toggle>
                            <span data-uk-icon="menu"></span>
                        </a>

                    </div>
                </div>
            </header>