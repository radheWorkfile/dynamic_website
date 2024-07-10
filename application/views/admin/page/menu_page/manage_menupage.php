<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | <?php echo $title; ?></title>
    <?php $this->load->view('admin/include/css') ?>
    <style>
        .h3n {
            font-size: 20px;
            margin-left: 10px;
            padding: 5px;

        }

        .h3m {
            margin: 5px auto;

        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('admin/include/header') ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php $this->load->view('admin/include/left') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 "><?php echo $title; ?></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active text-danger"><?php echo $breadcrums; ?></li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- page layout started -->

                    <div class="row">





                        <!-- banner section start -->
                        <?php if ($banner_p['status'] == 1) : ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title" style="">Banner Section:</span>

                                        <div style="float:right;">
                                            <span class="button" style="text-align: center; padding:5px;"><a href="javascript:void(0);" class="btn btn-success" id="see_hide" onclick="see_banner(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>


                                            <span class="button" style=" font-size:30px;">
                                                <?php if ($menu['banner'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="banner_off(<?php echo $menu['id']; ?>)" title="banner on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="banner_on(<?php echo $menu['id']; ?>)" title="banner off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="banner"></div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                        <!-- banner section end -->



                        <!-- About started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title">About Section:</span>

                                    <div style="float:right;">
                                        <span class="button " style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="about_show_hide" data-toggle="modal" data-target="#edit_about" onclick="see_about(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['about'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="about_off(<?php echo $menu['id']; ?>)" title="about on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="about_on(<?php echo $menu['id']; ?>)" title="about off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <!-- about end -->

                        <!-- News start -->
                        <?php if ($news_p['status'] == 1) : ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title">News Section</span>

                                        <div style="float:right;">
                                            <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="news" onclick="see_news(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['news'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="news_off(<?php echo $menu['id']; ?>)" title="News on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="news_on(<?php echo $menu['id']; ?>)" title="News off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="view_news"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- news end -->




                        <!-- servicess start -->
                        <?php if ($service_p['status'] == 1) : ?>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title" style="">Services Section:</span>
                                        <div style="float:right;">
                                            <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="service" onclick="see_service(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['services'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="service_off(<?php echo $menu['id']; ?>)" title="Service on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="service_on(<?php echo $menu['id']; ?>)" title="Service off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="view_service"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- servicess end -->

                        <!-- testimonials start -->
                        <?php if ($testimonial_p['status'] == 1) : ?>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title">Testimonial Section:</span>
                                        <div style="float:right;">
                                            <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="testimonial" onclick="see_testimonial(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['testimonial'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="testimonial_off(<?php echo $menu['id']; ?>)" title="Testimonials on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="testimonial_on(<?php echo $menu['id']; ?>)" title="Testimonials off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="view_testimonial"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- testimoniasl end -->

                        <!-- Gallery start -->
                        <?php if ($gallery_p['status'] == 1) : ?>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title" style="">Gallery Section:</span>
                                        <div style="float:right;">
                                            <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="gallery" onclick="see_gallery(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['gallery'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="Gallery_off(<?php echo $menu['id']; ?>)" title="Gallery on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="Gallery_on(<?php echo $menu['id']; ?>)" title="Gallery off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="view_gallery"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Gallery end -->


                        <!-- contact section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Contact Section:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['contact'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="contact_off(<?php echo $menu['id']; ?>)" title="contact on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="contact_on(<?php echo $menu['id']; ?>)" title="contact off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <!-- contact section end -->

                        <!-- career section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Career Section:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['career'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="career_off(<?php echo $menu['id']; ?>)" title="contact on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="career_on(<?php echo $menu['id']; ?>)" title="contact off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <!-- career section end -->

                        <!-- summernote section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Summernote Section:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="about_show_hide" data-toggle="modal" data-target="#edit_summernote" onclick="see_summernote(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['sumernote'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="summernote_off(<?php echo $menu['id']; ?>)" title="Summernote on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="summernote_on(<?php echo $menu['id']; ?>)" title="Summernote off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="banner"></div>
                                </div>
                            </div>
                        </div>
                        <!-- summernote section end -->

                        <!-- summernote1 section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Summernote Section-1:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="about_show_hide" data-toggle="modal" data-target="#edit_summernote1" onclick="see_summernote1(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['sumernote1'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="summernote1_off(<?php echo $menu['id']; ?>)" title="Summernote-1 on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="summernote1_on(<?php echo $menu['id']; ?>)" title="Summernote-1 off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="banner"></div>
                                </div>
                            </div>
                        </div>
                        <!-- summernote1 section end -->

                        <!-- summernote2 section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Summernote Section-2:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="about_show_hide" data-toggle="modal" data-target="#edit_summernote2" onclick="see_summernote2(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['sumernote2'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="summernote2_off(<?php echo $menu['id']; ?>)" title="Summernote-2 on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="summernote2_on(<?php echo $menu['id']; ?>)" title="Summernote-2 off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="banner"></div>
                                </div>
                            </div>
                        </div>
                        <!-- summernote2 section end -->

                        <!-- map section started -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Map Section:</span>
                                    <div style="float:right;">
                                        <span class="button " style="text-align:right; font-size:30px;">
                                            <?php if ($menu['map'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="map_off(<?php echo $menu['id']; ?>)" title="Map on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="map_on(<?php echo $menu['id']; ?>)" title="Map off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <!-- map section end -->

                        <!-- seo section started -->
                        <?php if ($seo_p['status'] == 1) : ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title" style="">SEO Section:</span>
                                        <div style="float:right;">
                                            <span class="button " style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="about_show_hide" data-toggle="modal" data-target="#edit_seo" onclick="see_seo(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>

                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['seo'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="seo_off(<?php echo $menu['id']; ?>)" title="SEO on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="seo_on(<?php echo $menu['id']; ?>)" title="SEO off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="banner"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Seo section end -->

                        <!-- hero section start start -->
                        <?php if ($hero_section['status'] == 1) : ?>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="h3n card-title">Hero Section</span>
                                        <div style="float:right;">
                                            <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="hero_section" onclick="see_hero_section(<?php echo $menu['id'] ?>)"><span class="show">See</span></a></span>
                                            <span class="button " style="text-align:right; font-size:30px;">
                                                <?php if ($menu['hero_section'] == 1) : ?>
                                                    <a href="javascript:void(0)" onclick="hero_section_off(<?php echo $menu['id']; ?>)" title="Hero section on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                                <?php else : ?>
                                                    <a href="javascript:void(0)" onclick="hero_section_on(<?php echo $menu['id']; ?>)" title="Hero section off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="view_hero_section"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- Hero section  end -->


                    </div>












                    <!-- page layout end -->



                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>


    <!-- Add banner Modal Start -->
    <div class="modal fade" id="add_modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Banner </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_Banner" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">
                            <?php $menu_id = $this->uri->segment(4); ?>
                            <div class="col-md-12 col-sm-12">
                                <label>Banner <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                                    <input type="file" name="banner" id="name" class="form-control"><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum width <?php echo $banner_p['width'] . "px"; ?>, Height <?php echo $banner_p['width'] . "px"; ?> and Size <?php echo $banner_p['width'] . "KB"; ?> </span>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label>Banner Text <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">

                                    <textarea name="banner_text" id="summernote" maxlength="50" cols="100%" rows="10"></textarea><br>
                                </div>

                            </div>

                            <div class="col-md-12 col-sm-12 bg-gray">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Button Url <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_url" value="NULL" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Button Text <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_text" value="Read More" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Button Color <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_color" value="red" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-dialog -->
    <!-- Add banner Modal End-->


    <!-- User Update Modal Start -->
    <div class="modal fade" id="edit_modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-sm" style="z-index:1100;">
                <div class="modal-header">
                    <h5 class="modal-title">Add Button</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_user" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="edit_button"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- User Update Modal End-->

    <!-- User View Modal Start -->
    <div class="modal fade" id="view_modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-sm" style="width: 250%;">
                <div class="modal-header">
                    <h5 class="modal-title">Banner view</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="view_banner"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- User View Modal End-->


    <?php $this->load->view('admin/page/menu_page/about_section/about_model'); ?>





    <?php $this->load->view('admin/page/menu_page/summernote_section/summernote_model'); ?>
    <?php $this->load->view('admin/page/menu_page/summernote1_section/summernote1_model'); ?>
    <?php $this->load->view('admin/page/menu_page/summernote2_section/summernote2_model'); ?>

    <?php $this->load->view('admin/page/menu_page/seo_section/seo_model'); ?>


    <?php $this->load->view('admin/page/menu_page/news_section/news_model'); ?>
    <?php $this->load->view('admin/page/menu_page/hero_section/hero_model'); ?>
    <?php $this->load->view('admin/page/menu_page/hero_section/hero_edit_model'); ?>


    <?php $this->load->view('admin/page/menu_page/service_section/service_model'); ?>
    <?php $this->load->view('admin/page/menu_page/testimonial_section/testimonial_model'); ?>

    <?php $this->load->view('admin/page/menu_page/gallery_section/gallery_model'); ?>






    <?php $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/include/js') ?>
    <script src="<?php echo  base_url() ?>media/js/admin/page/menu_page.js"></script>
   


</body>

</html>