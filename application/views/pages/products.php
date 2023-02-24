<?php
$this->load->view('layout/header');
$products = array(
    "Skid Steer Loader" => "thumb_134.jpg",
    "Dump Trucks" => "thumb_2.png",
    "Bulldozer" => "thumb_3.png",
    "Crawler Excavator" => "thumb_4.png",
    "Wheel Loader" => "thumb_5.png",
    "Motor Grader" => "thumb_7.png",
    "Backhoe Loader" => "thumb_8.png",
    "Fork Lift Trucks" => "thumb_6.png",
);
?>


<main class="page-main">
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url(<?php echo base_url(); ?>assets/img/bg/bg_categories.jpg)">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container">
                    <div class="header-icons"><span></span><span></span><span></span></div>
                    <div class="page-head__title"> Our Equipment</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><span>get in touch</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="section-category">
                <div class="uk-container">
                    <div class="section-title uk-text-center">
                        <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
                        <div class="uk-h2">Browse Machinery Categories</div>
                    </div>
                    <div class="section-content">
                        <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>

                            <?php
                            foreach ($products as $key => $value) {
                                ?>
                                <div>
                                    <div class="category-item"> 
                                        <a class="category-item__link uk-inline-clip uk-transition-toggle" href="#" tabindex="0">
                                            <div class="category-item__media"><img src="<?php echo base_url(); ?>assets/products/<?php echo $value; ?>" alt="Excavators" />
                                                <div class="uk-transition-fade">
                                                    <div class="uk-overlay-primary uk-position-cover"></div>
                                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                                                </div>
                                            </div>
                                            <div class="category-item__title"> <span><?php echo $key; ?></span></div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-cta">
        <div class="uk-container-expand">
            <div class="section-cta__box">
                <div class="section-cta__img"><img src="<?php echo base_url(); ?>assets/imgimg-cta.png" alt=""></div>
                <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>
                <div class="section-cta__support">
                    <div class="support"> <a class="support__link" href="tel:+(852) 9187 7140">
                            <div class="support__icon"><i class="fas fa-headset"></i></div>
                            <div class="support__desc">
                                <div class="support__label">Get Quick Support</div>
                                <div class="support__phone">+(852) 9187 7140</div>
                            </div>
                        </a></div>
                </div>
                <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get started</span><img src="<?php echo base_url(); ?>assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
            </div>
        </div>
    </div>
</main>
<?php
$this->load->view('layout/footer');
?>