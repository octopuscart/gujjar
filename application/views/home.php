<?php
$this->load->view('layout/header');
$products = array(
    "Skid Steer Loader" => "thumb_134.jpg",
    "Dump Trucks" => "thumb_2.png",
    "Bulldozer" => "thumb_3.png",
  
);
?>
<main class="page-main">
    <div class="section-slideshow">
        <div class="uk-position-relative uk-light" tabindex="-1" data-uk-slideshow="animation: fade; min-height: 400; max-height: 700;">
            <ul class="uk-slideshow-items">
                <li class="slideshow-item"><img src="<?php echo base_url(); ?>assets/img/slideshow-1.jpg" alt data-uk-cover>
                    <div class="slideshow-item__content">
                        <div class="uk-position-center uk-position-small uk-text-center">
                            <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                            <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">Top-Of-The-Line Equipment Ready At Flexible Rates Around</p>
                            <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Your One-Stop Source For All<br> Equipment Needs</h2>
                        </div>
                    </div>
                </li>
                <li class="slideshow-item"><img src="<?php echo base_url(); ?>assets/img/slideshow-2.jpg" alt data-uk-cover>
                    <div class="slideshow-item__content">
                        <div class="uk-position-center uk-position-small uk-text-center">
                            <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                            <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">Top-Of-The-Line Equipment Ready At Flexible Rates Around</p>
                            <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Your One-Stop Source For All<br> Equipment Needs</h2>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-visible@m"><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
        </div>
    </div>
    <div class="section-find">
        <div class="uk-container">
            <div class="find-box">
                <div class="find-box__title"> <span>Find The Right Equipment</span></div>
                <div class="find-box__form">
                    <form action="#!">
                        <div class="uk-grid uk-grid-medium uk-flex-middle uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                            <div>
                                <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="<?php echo base_url(); ?>assets/img/icons/truck.svg" alt="truck" data-uk-svg></span><select class="uk-select uk-form-large" name="category">
                                        <option value="">Select Category</option>
                                        <?php
                                        foreach ($products as $key => $value) {
                                            echo "<option value='$key'>$key</option>";
                                        }
                                        ?>
                                    </select></div>
                            </div>
                            <div>
                                <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="<?php echo base_url(); ?>assets/img/icons/derrick.svg" alt="derrick" data-uk-svg></span><input class="uk-input uk-form-large uk-width-1-1" type="text" placeholder="Equipment Name"></div>
                            </div>
                            <div>
                                <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"> <img src="<?php echo base_url(); ?>assets/img/icons/location.svg" alt="location" data-uk-svg></span><input class="uk-input uk-form-large uk-width-1-1" type="text" placeholder="What’s Your Location"></div>
                            </div>
                            <div>
                                <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="<?php echo base_url(); ?>assets/img/icons/calendar.svg" alt="calendar" data-uk-svg></span><input class="js-calendar uk-input uk-form-large uk-width-1-1" type="text" placeholder="Buying Date"></div>
                            </div>
                            <div>
                                <div class="uk-inline uk-width-1-1"><label> <input class="uk-radio" type="radio" name="delivery" checked><span> Delivery</span></label><label> <input class="uk-radio" type="radio" name="delivery"><span>Self Pickup</span></label></div>
                            </div>
                            <div><button class="uk-button uk-button-secondary uk-button-large uk-width-1-1" type="submit"><span>Find My Buys</span><img src="<?php echo base_url(); ?>assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                                    <div class="category-item__media"><img src="<?php echo base_url(); ?>assets/products/<?php echo $value;?>" alt="Excavators" />
                                        <div class="uk-transition-fade">
                                            <div class="uk-overlay-primary uk-position-cover"></div>
                                            <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                                        </div>
                                    </div>
                                    <div class="category-item__title"> <span><?php echo $key;?></span></div>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                   
                </div>
                <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="<?php echo site_url("equipments");?>"><span>More categories</span><img src="<?php echo base_url(); ?>assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
            </div>
        </div>
    </div>
    <div class="section-stats">
        <div class="uk-container uk-container-xlarge">
            <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div>
                    <div class="stats-item">
                        <div class="stats-item__header">
                            <div class="stats-item__numb">3.4k</div>
                            <div class="stats-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-stats-1.svg" data-uk-svg alt="Helping Projects Done"></div>
                        </div>
                        <div class="stats-item__title">Helping Projects Done</div>
                    </div>
                </div>
                <div>
                    <div class="stats-item">
                        <div class="stats-item__header">
                            <div class="stats-item__numb">25+</div>
                            <div class="stats-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-stats-2.svg" data-uk-svg alt="Years In Buy Business"></div>
                        </div>
                        <div class="stats-item__title">Years In Buy Business</div>
                    </div>
                </div>
                <div>
                    <div class="stats-item">
                        <div class="stats-item__header">
                            <div class="stats-item__numb">18+</div>
                            <div class="stats-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-stats-3.svg" data-uk-svg alt="Received Awards So far"></div>
                        </div>
                        <div class="stats-item__title">Received Awards So far</div>
                    </div>
                </div>
                <div>
                    <div class="stats-item">
                        <div class="stats-item__header">
                            <div class="stats-item__numb">5.9%</div>
                            <div class="stats-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-stats-4.svg" data-uk-svg alt="Earned Revenue This Year"></div>
                        </div>
                        <div class="stats-item__title">Earned Revenue This Year</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-about">
        <div class="uk-container">
            <div class="section-content">
                <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                    <div><img src="<?php echo base_url(); ?>assets/img/img-about.png" alt="img-about"></div>
                    <div>
                        <div class="section-title">
                            <div class="uk-text-meta">About Gujjar HK Trading Company Limited Buy</div>
                            <div class="uk-h2">We Offer Smarter & More<br> Affordable Access To Buy<br> Construction Equipment</div>
                        </div>
                        <p>GUJJAR HK TRADING COMPANY LIMITED is bringing tools and machinery needed for construction, mining and digging into the country,
                            so that you could buy from a reliable source of heavy equipment and get genuine spare parts and needed services. </p>

                        <p>
                            We have the wide range of products to serves various industries like construction, infrastructure, manufacturing, 
                            shipping, transportation, refining, energy, utilities, quarrying and mining industry.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-steps">
        <div class="uk-container uk-container-large">
            <div class="section-title uk-text-center">
                <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
                <div class="uk-h2">Get Your Buys In Easy Steps</div>
            </div>
            <div class="section-content">
                <div class="steps-list uk-position-relative" tabindex="-1" data-uk-slider="finite: true">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                        <li>
                            <div class="steps-item">
                                <div class="steps-item__box" data-uk-tooltip="title: Best thing about Gujjar HK Trading is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                                    <div class="steps-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-step-1.png" alt="icon-step"></div>
                                    <div class="steps-item__title"><b>1</b><span>Search Your Equipment</span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="steps-item">
                                <div class="steps-item__box" data-uk-tooltip="title: Best thing about Gujjar HK Trading is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                                    <div class="steps-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-step-2.png" alt="icon-step"></div>
                                    <div class="steps-item__title"><b>2</b><span>compare Your selection</span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="steps-item">
                                <div class="steps-item__box" data-uk-tooltip="title: Best thing about Gujjar HK Trading is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                                    <div class="steps-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-step-3.png" alt="icon-step"></div>
                                    <div class="steps-item__title"><b>3</b><span>Reserve the equipment   </span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="steps-item">
                                <div class="steps-item__box" data-uk-tooltip="title: Best thing about Gujjar HK Trading is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                                    <div class="steps-item__icon"><img src="<?php echo base_url(); ?>assets/img/icons/ico-step-4.png" alt="icon-step"></div>
                                    <div class="steps-item__title"><b>4</b><span> Get Start Your Project</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="uk-hidden@l">
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-cta">
        <div class="uk-container-expand">
            <div class="section-cta__box">
                <div class="section-cta__img"><img src="<?php echo base_url(); ?>assets/img/img-cta.png" alt=""></div>
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
    <div class="section-why-choose-us">
        <div class="uk-container">
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div>
                    <div class="blocks-icon uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="block-icon"><a class="block-icon__link" href="#">
                                    <div class="block-icon__box">
                                        <div class="block-icon__ico"><img src="<?php echo base_url(); ?>assets/img/icons/ico-why-choose-1.svg" alt="block-icon"></div>
                                        <div class="block-icon__title">Buy Quality<br> Equipment</div>
                                    </div>
                                </a></div>
                        </div>
                        <div>
                            <div class="block-icon"><a class="block-icon__link" href="#">
                                    <div class="block-icon__box">
                                        <div class="block-icon__ico"><img src="<?php echo base_url(); ?>assets/img/icons/ico-why-choose-2.svg" alt="block-icon"></div>
                                        <div class="block-icon__title">Reliable &<br> Fast Service</div>
                                    </div>
                                </a></div>
                        </div>
                        <div>
                            <div class="block-icon"><a class="block-icon__link" href="#">
                                    <div class="block-icon__box">
                                        <div class="block-icon__ico"><img src="<?php echo base_url(); ?>assets/img/icons/ico-why-choose-3.svg" alt="block-icon"></div>
                                        <div class="block-icon__title">Best Prices<br> Gurantee</div>
                                    </div>
                                </a></div>
                        </div>
                        <div>
                            <div class="block-icon"><a class="block-icon__link" href="#">
                                    <div class="block-icon__box">
                                        <div class="block-icon__ico"><img src="<?php echo base_url(); ?>assets/img/icons/ico-why-choose-4.svg" alt="block-icon"></div>
                                        <div class="block-icon__title">Buy With Full<br> Security</div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="section-title">
                        <div class="uk-text-meta">Why Choose Gujjar HK Trading Equipment Buys</div>
                        <div class="uk-h2">Over 500+ Buy Deals Gujjar HK Trading Is The Best Choice</div>
                    </div>
                    <div class="section-content">
                        <p>We have the wide range of products to serves various industries like construction, infrastructure, manufacturing, shipping, transportation, refining, energy, utilities, quarrying and mining industry.

                            .</p>
                        <ul class="list-checked">
                            <li>Machinery Sales</li>
                            <li>After Sales Support</li>
                            <li>Best Prices Gurantee</li>
                            <li>Operations & Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-equipment">
        <div class="uk-container">
            <div class="equipment-box">
                <div class="equipment-box__media"><img src="<?php echo base_url(); ?>assets/img/img-equipment.jpg" alt=""></div>
                <div class="equipment-box__desc">
                    <div class="equipment-box__title">Worried About The Idling Equipment Parking At Yard?</div>
                    <div class="equipment-box__text">Start listing your equipment(s) with us today!</div>
                    <div class="equipment-box__btn"><a class="uk-button uk-button-large" href="#"><span>Learn more</span><img src="<?php echo base_url(); ?>assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-reviews">
        <div class="uk-container">
            <div class="section-title uk-text-center">
                <div class="uk-text-meta">Career opportunities and take your career to the next level.</div>
                <div class="uk-h2">Urgently Needs With A Great Opening</div>
            </div>
            <div class="section-content">
                <div data-uk-slider="autoplay: true">
                    <div class="uk-position-relative" tabindex="-1">
                        <div class="text-center">
                            <h3>BUSINESS DEVELOPMENT MANAGER</h3>
                            <p>
                                <b>Requirements</b><br/>
                                B.B.A & M.B.A (in Marketing) First Class Degree, <br/>
                                Strong IT & Communication Skill,<br/>
                                Finding & Developing New Markets to improve sales,<br/>
                                More than 5 years of experience in Construction / Engineering Company<br/>
                                Immediately Available<br/>
                            </p>

                            Please send your CV, Expected Salary, Availability Date<br/>
                            Email: <a href="mailto:sales@gujjarhk.com">sales@gujjarhk.com</a>  Mob / Whatsapp No.: <a href="tel:+(852) 9187 7140">+(852) 9187 7140</a>
                        </div>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
$this->load->view('layout/footer');
?>