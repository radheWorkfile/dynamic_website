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
                    <a href="<?= base_url('super_admin/dashboard') ?>" class="nav-link <?= ($controller == "dashboard") ? "active" : ''; ?>">
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
                            Manage Navbar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/navbar/manage_navbar') ?>" class="nav-link <?= ($menu == "manage_navbar") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Menu Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/navbar/manage_2navbar') ?>" class="nav-link <?= ($menu == "manage_2navbar") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Submenu Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/navbar/manage_3navbar') ?>" class="nav-link <?= ($menu == "manage_3navbar") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Child Submenu Navbar</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item <?= ($controller == "banner") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "banner") ? "active" : ''; ?>">
                        <i class="nav-icon far fa-image "></i>
                        <p>
                           Manage Banner
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/banner/manage_banner') ?>" class="nav-link <?= ($menu == "manage_banner") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "logo") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "logo") ? "active" : ''; ?>">
                        <i class="nav-icon far fa-image "></i>
                        <p>
                           Manage Logo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Logo/manage_logo') ?>" class="nav-link <?= ($menu == "manage_logo") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Logo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "favicon") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "favicon") ? "active" : ''; ?>">
                        <i class="nav-icon far fa-image "></i>
                        <p>
                           Manage Favicon
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Favicon/manage_favicon') ?>" class="nav-link <?= ($menu == "manage_favicon") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Favicon</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item <?= ($controller == "service") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "service") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                            Manage Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Service/manage_Service') ?>" class="nav-link <?= ($menu == "manage_service") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Service</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= ($controller == "Cont_img_sec") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "Cont_img_sec") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                            Manage image cotent section
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Cont_img_sec/manage_Cont_img_section') ?>" class="nav-link <?= ($menu == "manage_Cont_img_section") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p> Manage image cotent</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "testimonial") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "testimonial") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                           Manage Testimonial
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Testimonial/manage_testimonial') ?>" class="nav-link <?= ($menu == "manage_testimonial") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Testimonial</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item <?= ($controller == "gallary") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "gallary") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                           Manage Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/gallary/manage_gallary') ?>" class="nav-link <?= ($menu == "manage_gallary") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "Seo") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "Seo") ? "active" : ''; ?>">
                        <i class="nav-icon 	fa fa-bullhorn"></i>
                        <p>
                           Manage SEO
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Seo/manage_seo') ?>" class="nav-link <?= ($menu == "manage_seo") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>SEO</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item <?= ($controller == "news") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "news") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                           Manage News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/news/manage_news') ?>" class="nav-link <?= ($menu == "manage_news") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= ($controller == "settings") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "settings") ? "active" : ''; ?>">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                           Manage Analytics
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('super_admin/Settings/manage_settings') ?>" class="nav-link <?= ($menu == "manage_settings") ? "active" : ''; ?>">
                                <i class="fa fa-arrow-right nav-icon"></i>
                                <p>Analytics, Livechat</p>
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