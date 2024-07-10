<?php
$controller = $this->uri->segment(2);
$menu = $this->uri->segment(3);

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>media/images/logo/favicon.png" alt="Camwel" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $this->session->userdata('company_name') ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() . '/' . $this->session->userdata('photo'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $this->session->userdata('name'); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= ($controller == "dashboard") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item <?= ($controller == "navbar") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "navbar") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Menu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/navbar/manage_navbar') ?>" class="nav-link <?= ($menu == "manage_navbar") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Manage Menu</p>
                            </a>
                        </li>
                        <?php if($navbar['2nd_navbar_permission']==1):?>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/navbar/manage_submenu') ?>" class="nav-link <?= ($menu == "manage_submenu") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Manage Submenu</p>
                            </a>
                        </li>
                        <?php endif;?>

                        <?php if($navbar['3rd_navbar_permission']==1):?>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/navbar/manage_child_submenu') ?>" class="nav-link <?= ($menu == "manage_child_submenu") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Manage Child Submenu</p>
                            </a>
                        </li>
                        <?php endif;?>



                    </ul>
                </li>

              


               
               
                <li class="nav-item <?= ($controller == "Setting") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "setting") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/Setting/manage_setting') ?>" class="nav-link <?= ($menu == "manage_setting") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Manage Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "Enquiry") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "Enquiry") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Enquiry
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/Enquiry/manage_enquiry') ?>" class="nav-link <?= ($menu == "manage_enquiry") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Manage Enquiry</p>
                            </a>
                        </li>
                    </ul>
                </li>

               


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>