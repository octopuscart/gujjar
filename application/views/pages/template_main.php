<?php
$this->load->view('layout/header');
?>

<main class="page-main customtemplate">
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url(<?php echo base_url(); ?>assets/img/bg/bg_categories.jpg)">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container">
                    <div class="header-icons"><span></span><span></span><span></span></div>
                    <div class="page-head__title"> <?php echo $contentData["title"] ?></div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="<?php echo site_url("/")?>">Home</a></li>
                            <li><span><?php echo $contentData["uri"] ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="uk-section-large uk-container">
            <?php echo $contentData["content"] ?>
        </div>
    </div>

</main>



<?php
$this->load->view('layout/footer');
?>