<?php // print_r($submenu); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">



      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       

        <!-- menu started -->
        <?php foreach ($menu as $m) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo ($m['child']>0)?'dropdown-toggle':'';?>" href="<?php echo base_url()."Website/page/{$m['id']}";?>" role="button" data-bs-toggle="<?php echo ($m['child']>0)?'dropdown':'';?>" aria-expanded="false">
              <?php echo $m["menu"]; ?>
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
        <!-- menu end -->
      </ul>



      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>