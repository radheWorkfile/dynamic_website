
  <div class="row" style="background: linear-gradient(to right, #1e9600, #fff200, #ff0000); height:40px; width:100%;">



    <div class="col-md-4" > 
      
<div class="">
  <div class="table"  style="margin-left:40px;">
    <tr>
      <td>  

    <i class="fa fa-phone" aria-hidden="true" style="color:black; padding-top:10px;"></i> <a href="tel:7739852625;" style="color:black;padding-left:4px;">+91 9028388889 / +91 9572852742</a>

      </td>
    </tr>
  </div>
</div>
</div>

  <div class="col-md-6" > 
  <i class="fa fa-envelope" aria-hidden="true" style="color:black; padding-top:10px; margin-left:130px;"></i> <a href="mailto:anpc85@gmail.com;" style="color:black;padding-left:4px;">camwelsolution@gmail.com</a>

  </div>
  <style>
    a{padding:10px;}
    .menu-man{color:#423881;margin-left:25px;}
    .menu-p-man:hover{padding:0.5rem 0.5rem;  background:#febc51;color:black;border-radius:0.2rem;}
  </style>

  <div class="col-md-2" style="padding-top:8px;"> 
    <a href="https://wa.me/7739852625" style="color:black;"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/" style="color:black;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/" style="color:black;"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

    <a href="https://www.instagram.com/" style="color:black;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.twitter.com/" style="color:black;"><i class="fa fa-twitter" aria-hidden="true"></i></a>

  </div>
 
  </div>



<?php // print_r($submenu); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid"  style="background: linear-gradient(to right, #f19411, #f5af19)!important; margin-top:-10px;">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="" style="margin-left:120px;" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">



      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       

        <!-- menu started -->
        <?php foreach ($menu as $m) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo ($m['child']>0)?'dropdown-toggle':'';?>" href="<?php echo base_url()."Website/page/{$m['id']}";?>" role="button" data-bs-toggle="<?php echo ($m['child']>0)?'dropdown':'';?>" aria-expanded="false">
             <b class="menu-man"><span class="menu-p-man"><?php echo $m["menu"]; ?></span></b>
            </a>
            <!-- submenu section start-->
            <ul class="dropdown-menu" style="background-color:rgb(193, 224, 255);" style="">              
              <?php foreach ($submenu as $sm) : ?>
                <?php if ($m['id'] == $sm['menu_id']) : ?>
                  <li><a class="dropdown-item" href="<?php echo base_url()."Website/sub_page/{$m['id']}/{$sm['id']}";?>" style=" border-top: 1px solid #00375a; padding:0px 10px 0px 10px; color:#00375a;"><?php echo $sm['sub_menu'];?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
              </ul>

            <!-- submenu section  end-->
          </li>
        <?php endforeach; ?>
        <!-- menu end -->
      </ul>



      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>