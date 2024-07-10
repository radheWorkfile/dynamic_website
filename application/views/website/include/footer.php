        <style>
.footer-img-man{height:4rem;border: 2px dotted #ff5949;}
        </style>
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top"style="position:relative;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
          <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>">
        </a>
                                <div class="footer-about">
                                    <p style="text-align:justify;"><?php echo $company['about_company']; ?></p>
                                </div>
                                <ul class="footer-social">
                                <?php if (!empty($company['facebook'])) : ?>  <li><a href="<?php echo $company['facebook']; ?> " style="margin-top:-10px;"><i class="fa fa-facebook" aria-hidden="true" ></i></a></li>  <?php endif; ?>
                                    <?php if (!empty($company['instagram'])) : ?>   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php endif; ?>
                                        <?php if (!empty($company['tweeter'])) : ?> <li><a href="<?php echo $company['tweeter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                                            <?php if (!empty($company['linkedln'])) : ?>  <li><a href="<?php echo $company['linkedln']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php endif; ?>
                                                <?php if (!empty($company['youtube'])) : ?><li><a href="<?php echo $company['youtube']; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php endif; ?>
                                     <?php if (!empty($company['whatsapp'])) : ?> <li><a href="https://wa.me/<?php echo $company['whatsapp']; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li><?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" style="padding-left:55px; margin-top:33px;" >
                            <div class="footer-box">
                                <h3 style="color:#001a39;">Featured Links</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Addmission</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Placement</a></li>
                                            <li><a href="#">Contact</a></li>
                                 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" style="margin-top:33px;">
                            <div class="footer-box">
                                <h3 style="color:#001a39;">Information</h3>
                                <?php
        $contact1 = explode(",", $contact['contact_number']);
        $email1 = explode(",", $contact['email']);
        ?>
                                <ul class="corporate-address">
                                <?php foreach ($contact1 as  $contact1) : ?>
                             
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone(01)800433633.html"> &nbsp;<?php echo $contact1; ?></a></li>
                                <?php endforeach; ?>
                                <?php foreach ($email1 as  $email1) : ?>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;<?php echo $email1; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="newsletter-area">
                                    <h3 style="color:#001a39;">Newsletter</h3>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                        <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>  
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" style="margin-top:33px;">
                            <div class="footer-box">
                                <h3 style="color:#001a39;">Flickr Photos</h3>
                                <ul class="flickr-photos">
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li><br>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url();?>uploads/av1.png" alt="flickr"style="height:4rem;border: 2px dotted #ff5949;"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row" >
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <p style="text-align:center;">&copy; 2020 Academics All Rights Reserved. &nbsp; Designed by<a target="_blank" href="javaScript:void(0);" rel="nofollow"> Camwel Solution</a></p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->