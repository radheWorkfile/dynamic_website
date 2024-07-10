     <!-- Header Area Start Here -->
     <header>
            <div id="header1" class="header1-area">
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <div class="logo-area">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="" style="margin-top:10px;"></a>
                                 
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-9">
                                <nav id="desktop-nav">
                                <ul>
                                      
                                      <?php foreach ($menu as $m) : ?>
      <li class="nav-item dropdown">
        <a class="nav-link <?php echo ($m['child']>0)?'dropdown-toggle':'';?>" href="<?php echo base_url()."Website/page/{$m['id']}";?>" role="button" data-bs-toggle="<?php echo ($m['child']>0)?'dropdown':'';?>" aria-expanded="false">
         <b style="color:#423881;"> <?php echo $m["menu"]; ?></b>
        </a>
        <!-- submenu section start-->
        <ul class="dropdown-menu">              
          <?php foreach ($submenu as $sm) : ?>
            <?php if ($m['id'] == $sm['menu_id']) : ?>
              <li><a class="dropdown-item" href="<?php echo base_url()."Website/sub_page/{$m['id']}/{$sm['id']}";?>"><?php echo $sm['sub_menu'];?></a></li>
            <?php endif; ?>
            <?php endforeach; ?>
          </ul>

        <!-- submenu section  end-->
      </li>
    <?php endforeach; ?>
                                   
                             
                                </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="apply-btn-area">
                                    <a href="#" class="apply-now-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.php">Home 1</a></li>
                                                <li><a href="index2.php">Home 2</a></li>
                                                <li><a href="index3.php">Home 3</a></li>
                                                <li><a href="index4.php">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about1.php">About 1</a></li>
                                                <li><a href="about2.php">About 2</a></li>
                                                <li><a href="about3.php">About 3</a></li>
                                                <li><a href="about4.php">About 4</a></li>
                                                <li><a href="lecturers1.php">lecturers 1</a></li>
                                                <li><a href="lecturers2.php">lecturers 2</a></li>
                                                <li><a href="single-lecturers.php">lecturers Details</a></li>
                                                <li><a href="pricing1.php">Pricing Plan 1</a></li>
                                                <li><a href="pricing2.php">Pricing Plan 2</a></li>
                                                <li><a href="shop1.php">Shop 1</a></li>
                                                <li><a href="shop2.php">Shop 2</a></li>
                                                <li><a href="single-shop.php">Shop Details</a></li>
                                                <li><a href="faq.php">Faq</a></li>
                                                <li><a href="404.php">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Courses</a>
                                            <ul>
                                                <li><a href="courses1.php">Courses 1</a></li>
                                                <li><a href="courses2.php">Courses 2</a></li>
                                                <li><a href="courses3.php">Courses 3</a></li>
                                                <li><a href="single-courses1.php">Course Details 1</a></li>
                                                <li><a href="single-courses2.php">Course Details 2</a></li>
                                                <li><a href="single-courses3.php">Course Details 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research1.php">Research 1</a></li>
                                                <li><a href="research2.php">Research 2</a></li>
                                                <li><a href="research3.php">Research 3</a></li>
                                                <li><a href="single-research.php">Research Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.php">News 1</a></li>
                                                        <li><a href="news2.php">News 2</a></li>
                                                        <li><a href="single-news.php">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.php">Event</a></li>
                                                        <li><a href="single-event.php">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery1.php">Gallery 1</a></li>
                                                <li><a href="gallery2.php">Gallery 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact1.php">Contact 1</a></li>
                                                <li><a href="contact2.php">Contact 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->