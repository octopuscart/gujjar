<?php
$this->load->view('layout/header');
?>

<!--KODE SAB BANNER WRAP START-->
<div class="kode_sab_banner_wrap them_overlay">
    <!--CONTAINER START-->
    <div class="container">
        <div class="sab_banner_text">
            <h2>Madrassa Admission Form</h2>
            <!--            <ul class="breadcrumbs">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li><strong>Madrasa Admission Form</strong></li>
                        </ul>-->
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE SAB BANNER WRAP END-->



<!--KODE 404 WRAP START-->
<div class="kode_contact_wrap">

    <!--CONTAINER START-->
    <!--KODE CONTACT DES START-->
    <div class="kode_contact_des">
        <div class="container">
            <div class="row">
                <div class="kode_contact_field">
                    <div class="col-md-2"></div>


                    <div class="col-md-8">
                        <form method="post" id="commentform" class="comment-form">
                            <div class="section_hdg hdg_2 hdg_3">
                                <a href="#"><img src="images/hdg-img.png" alt=""></a>
                                <h3>APPLICANT DETAILS</h3>
                                <span><i class="fa icon-building"></i></span>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Madrassa Class" name="madarsa_class" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="HKID# / Passport#" name="hkid_passport" type="text" value=""  size="30" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Surname" name="surname" type="text" value=""  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Given Name" name="given_nmae" type="text" value=""   required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="kf_commet_field">
                            
                                    <input placeholder="Date of Birth (DD-MM-YY)" name="dob" type="text" value=""  size="30" max="<?php echo date("Y-m-d");?>" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Nationality" name="nationality" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="kf_commet_field">
                                    <input placeholder="Address" name="address" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Contact No." name="contact_no" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Email ID" name="email_id" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Name Of Applicant’s School" name="applicant_school" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Form" name="form" type="text" value=""  size="30" required>
                                </div>
                            </div>



                            <div class="section_hdg hdg_2 hdg_3">
                                <a href="#"><img src="images/hdg-img.png" alt=""></a>
                                <h3>PARENT DETAILS</h3>
                                <span><i class="fa icon-building"></i></span>
                            </div>

                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Father's Name" name="father_name" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Father's HKID#" name="father_hkid" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Mother's Name" name="mother_name" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Contact No." name="f_contact_no" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Email Id" name="p_email_id" type="text" value=""  size="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kf_commet_field">
                                    <input placeholder="Occupation" name="occupation" type="text" value=""  size="30" required>
                                </div>
                            </div>

                            <div class="section_hdg hdg_2 hdg_3">
                                <a href="#"><img src="images/hdg-img.png" alt=""></a>
                                <h3>OTHER DETAILS</h3>
                                <span><i class="fa icon-building"></i></span>
                            </div> 

                            <div class="col-md-12">
                                <div class="kode_textarea">
                                    <textarea placeholder="Write Here" name="other_detail"></textarea>
                                </div>
                                <p class="form-submit"><input name="submit" type="submit" class="medium_btn background-bg-dark btn_hover hvr-wobble-bottom" value="Submit Now"></p>
                            </div>


                        </form>
                        <div class="col-md-3"></div>  
                    </div>
                </div>
                <!--KODE CONTACT SERVICE START-->
                <!--            <div class="kode_contact_service">
                                <ul>
                                    <li>
                                        <div class="kode_contact_text">
                                            <h5><a href="#">ADDRESS</a></h5>
                                            <a href="#"><i class="fa fa-map-marker"></i></a>
                                            <p><span>8569 Johanwolfgang street</span> 
                                                Berlin Germany L, 688521
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="kode_contact_text">
                                            <h5><a href="#">PHONE</a></h5>
                                            <a href="#"><i class="fa fa-map-marker"></i></a>
                                            <p><span>Landline : 37/5 77868 777 688</span> 
                                                Mobile : +87 66665 7785 7
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="kode_contact_text">
                                            <h5><a href="#">EMAIL ADDRESS</a></h5>
                                            <a href="#"><i class="fa fa-map-marker"></i></a>
                                            <p><span>General : info@islamic.com</span> 
                                                Office : info@islamic.com
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>-->
                <!--KODE CONTACT SERVICE END-->
            </div>	
            <!--CONTAINER END-->
        </div>
        <!--KODE CONTACT DES END-->
    </div>
    <!--KODE 404 WRAP END-->

    <?php
    $this->load->view('layout/footer');
    ?>