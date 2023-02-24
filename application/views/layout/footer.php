<?php
$menulinks = array(
    "Home" => site_url("/"),
    "Equipments" => site_url("equipments"),
    "About" => site_url("about"),
    "Career" => site_url("career"),
    "Contact" => site_url("contact-us"),
);
?>
<footer class="page-footer">
    <div class="uk-container uk-container-large">

        <div class="page-footer-middle">
            <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div class="uk-flex-first@l">
                    <div class="title">About Gujjar HK Trading </div>
                    <p>We have the wide range of products to serves various industries like construction, infrastructure, manufacturing, shipping, transportation and mining industry.</p>
                    <ul class="social-list">
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
                <div class="uk-flex-last@l">
                    <div class="title">Get In Touch</div>
                    <ul class="contacts-list">
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-phone24.svg" data-uk-svg alt="For Rental Support"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">For Rental Support</div>
                                <div class="contacts-list-item__content"> <a href="tel:+(852) 9187 7140">+(852) 9187 7140</a></div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-timer.svg" data-uk-svg alt="The Office Hours"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">The Office Hours</div>
                                <div class="contacts-list-item__content">10:00 AM to 06:00 PM</div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-mail.svg" data-uk-svg alt="Send Us Email"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">Send Us Email</div>
                                <div class="contacts-list-item__content"> <a href="mailto:sales@gujjarhk.com">sales@gujjarhk.com</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="footermenulinks">
                    <div class="title">Useful links</div>
                    <ul class="uk-nav uk-list-disc">
                        <?php
                        foreach ($menulinks as $key => $value) {
                            ?>
                            <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div>
                    <div class="title">Explore antek</div>
                    <ul class="uk-nav uk-list-disc">
                        <li><a href="#">Buy Quality Equipment</a></li>
                        <li><a href="#">Reliable & Fast Service</a></li>
                        <li><a href="#">Best Prices Gurantee</a></li>
                        <li><a href="#">Buy With Full Security</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-footer-bottom"><span>(c) <?php echo date("Y") ?> Gujjar HK Trading. All Rights Reserved.</span>

        </div><a class="totop-link" href="#top" data-uk-scroll><img src="<?php echo base_url(); ?>assets/img/icons/ico-totop.svg" alt="totop"><span>Go to top</span></a>
    </div>
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin">
                <div class="logo"><a class="logo__link" href="/"><img class="logo__img" src="<?php echo base_url(); ?>assets/img/logo-white.png" alt="logo"></a></div>
            </div>
            <div class="uk-margin">
                <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                    <?php
                    foreach ($menulinks as $key => $value) {
                        ?>
                        <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="uk-margin">
                <div class="support"> <a class="support__link" href="tel:+(852) 9187 7140">
                        <div class="support__icon"><i class="fas fa-headset"></i></div>
                        <div class="support__desc">
                            <div class="support__label">Get Quick Support</div>
                            <div class="support__phone">+(852) 9187 7140</div>
                        </div>
                    </a></div>
            </div>
            <div class="uk-margin">
                <div class="social">
                    <ul class="social-list">
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
</div>
<?php
$jsfiles = [
    "js/libs.js",
    "js/main.js",
];
foreach ($jsfiles as $key => $value) {
    $filepath = base_url("assets/" . $value);
    echo "<script src='$filepath'></script>\n";
}
?>

</body>


</html>


