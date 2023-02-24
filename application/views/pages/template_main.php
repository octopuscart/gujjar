<?php
$this->load->view('layout/header');
?>
<!-- Slider -->
<!--KODE SAB BANNER WRAP START-->
<div class="kode_sab_banner_wrap them_overlay ">
    <!--CONTAINER START-->
    <div class="container">
        <div class="sab_banner_text">
            <h2><?php echo $contentData["title"] ?></h2>
            <ul class="breadcrumbs">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><strong><?php echo $contentData["uri"] ?></strong></li>
            </ul>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE SAB BANNER WRAP END-->

<!--KODE MOSQUES WRAP STRAT-->
<div class="kode_mosques_wrap maincontenttemplate">
    <!--CONTAINER STRAT-->
    <div class="container">
        <!--ROW STRAT-->
        <div class="row">
            <?php echo $contentData["content"] ?>
        </div>
    </div>
</div>


<?php
$this->load->view('layout/footer');
?>